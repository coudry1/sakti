<?php error_reporting(0); ?>
<link href="../css/table_white.css" rel="stylesheet">	
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
include "../koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$sql  = oci_parse($conn, "select * from (select id,kode_satker,tgl_kwitansi,no_kwitansi,kode_akun,keterangan
from sakti_app.ben_t_kwitansi_header
where non_barang=1 and status_barang=0 and deleted=0) a
inner join
(
select distinct kwitansi_id from sakti_app.ben_t_kwitansi_detail 
where substr(kode_sub_sub_kelompok,1,1)!='1'
) b
on a.id=b.kwitansi_id where kode_satker in ('527027','527031','527048','527052','531293','579330','015114','015117','613811','015116','015115')  order by kode_satker, tgl_kwitansi desc" );

oci_execute($sql);
echo "
<table height='50px' width='1148px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='6'align='center'>&nbsp;</td></tr>
<tr><td colspan='6'align='left'></td></tr>
<tr><td colspan='6' align='center'><strong>BELUM PENDETILAN KWITANSI MODUL ASET</strong></td></tr>
<tr><td colspan='6' align='center'><strong>LINGKUP KANWIL DKI JAKARTA</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1150px' align='center' border='1'>
  <tr>
    <th align='center'><strong>No. </strong></th>
    <th class='head0' nosort'>Kode Satker </td>
    <th class='head1' >Tanggal Kuitansi </td>
    <th class='head0' >No Kuitansi </td>
    <th class='head1' >Kode Akun </td>
    <th class='head1' >Keterangan </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,48);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td> 
    <td width='50px' align='center'>". $row1["KODE_SATKER"] ."</td>
    <td width='130px' align='center'>". $row1["TGL_KWITANSI"] . "</td>
    <td width='200px'>". $row1["NO_KWITANSI"] . "</td>
    <td>". $row1["KODE_AKUN"] . "</td>
    <td >". $KET . "</td>
  </tr>
 ";
    $no++; 
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>