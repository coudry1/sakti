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

$sql  = oci_parse($conn, "select * from(
select c.kode_satker,c.no_bast,c.tgl_bast,c.nilai,c.akun,d.jenis, 
case 
when c.akun!='53' and d.jenis!='1' then 'Aset dengan selain 53'
when c.akun='53' and d.jenis='1' then 'Persediaan dengan 53'
else 'Wajar' 
end keterangan
from 
(select * from 
(select id_bast no_urut,id_dist_coa,kode_satker,no_bast,tgl_bast from sakti_app.KOM_T_BAST_HEADER where deleted='0') a
join
(select id_dist_coa bas,substr(kode_glp_t_coa,12,2) akun,nilai from sakti_app.KOM_T_DIST_COA) b
on a.id_dist_coa = b.bas) c
join 
(select id_bast,substr(kode_barang,1,1) jenis from sakti_app.KOM_T_BAST_DETAIL 
where is_dicatat='1') d 
on c.no_urut=d.id_bast
order by kode_satker)
where keterangan!='Wajar'");

oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='8'align='center'>&nbsp;</td></tr>
<tr><td colspan='8'align='left'></td></tr>
<tr><td colspan='8' align='center'><strong>KONTRAKTUAL ASET/PERSEDIAAN TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='8' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>    
    <th class='head0' align='center' >No BAST</td>
    <th class='head1' >Tanggal BAST</td>
    <th class='head1' >Nilai</td>
    <th class='head0' >Akun</td>
    <th class='head0' >Jenis</td>
    <th class='head1' >Keterangan</td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,50);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center'>". $row1["KODE_SATKER"] ."</td>
    <td  align='center'>". $row1["NO_BAST"] . "</td>
    <td  align='center'>". $row1["TGL_BAST"] . "</td>
    <td  align='center'>". $row1["NILAI"] . "</td>
    <td  align='center'>". $row1["AKUN"] . "</td>
    <td  align='center'>". $row1["JENIS"] . "</td>
    <td  align='left'>". $KET . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>