<?php error_reporting(0); ?>
<link href="css/table_white.css" rel="stylesheet">	
<script>function Print() {
document.body.offsetHeight;
window.print();
}
</script>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form name="form2" method="post" onSubmit="Print()" action="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Submit2" type="submit" class="button" value="PRINT">
<br><br>
<?php 
include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$sql  = oci_parse($conn, "select * from (
select a.kode_satker,a.no_kwitansi,a.tgl_kwitansi,a.akun,a.keterangan,a.jumlah,b.kel_barang, 
case 
when a.akun!='53' and b.kel_barang!='1' then 'Aset dengan selain 53'
when a.akun!='52' and b.kel_barang='1' then 'Persediaan selain 52'
else 'Wajar' 
end status
from 
(select id,kode_satker,no_kwitansi,tgl_kwitansi,substr(kode_akun,1,2) akun, keterangan, jumlah from sakti_app.BEN_T_KWITANSI_HEADER where deleted='0' and non_barang='1') a
join
(select distinct kwitansi_id,substr(kode_sub_sub_kelompok,1,1) kel_barang from SAKTI_APP.BEN_T_KWITANSI_DETAIL) b
on a.id=b.kwitansi_id
order by kode_satker)
where status!='Wajar'");

oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='9'align='center'>&nbsp;</td></tr>
<tr><td colspan='9'align='left'></td></tr>
<tr><td colspan='9' align='center'><strong>KWITANSI ASET/PERSEDIAAN TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='9' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>    
    <th class='head0' align='center' >No Kwitansi</td>
    <th class='head1' >Tanggal Kwitansi</td>
    <th class='head0' >Akun</td>
    <th class='head0' >Keterangan </td>
    <th class='head1' >Jumlah</td>
    <th class='head1' >Kel. Barang</td>
    <th class='head1' >Status</td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,50);
 $jml=number_format($row1["JUMLAH"],0,",",".");
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center'>". $row1["KODE_SATKER"] ."</td>
    <td  align='center'>". $row1["NO_KWITANSI"] . "</td>
    <td  align='center'>". $row1["TGL_KWITANSI"] . "</td>
    <td  align='center'>". $row1["AKUN"] . "</td>
    <td  align='left'>". $KET . "</td>
    <td  align='right'>". $jml . ",-</td>
    <td align='center' >". $row1["KEL_BARANG"] . "</td>
    <td>". $row1["STATUS"] . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>