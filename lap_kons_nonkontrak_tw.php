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
select a.kode_satker,a.no_dokumen,a.tgl_dokumen,a.nilai_bast,a.uraian_dokumen,a.akun,b.jenis, 
case 
when a.akun!='53' and b.jenis!='1' then 'Aset dengan selain 53'
when a.akun='53' and b.jenis='1' then 'Persediaan dengan 53'
else 'Wajar' 
end keterangan
from 
(select id_dokumen no_urut,kode_satker,no_dokumen,tgl_dokumen,uraian_dokumen,substr(kode_glp_t_coa,12,2) akun,nilai_bast from sakti_app.KOM_T_BAST_NONK_HEADER where deleted='0') a
join
(select distinct id_dokumen,substr(kode_barang,1,1) jenis from SAKTI_APP.KOM_T_BAST_NONK_DETAIL where is_dicatat='1') b
on a.no_urut=b.id_dokumen
order by kode_satker)
where keterangan!='Wajar'");

oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='9'align='center'>&nbsp;</td></tr>
<tr><td colspan='9'align='left'></td></tr>
<tr><td colspan='9' align='center'><strong>NONKONTRAKTUAL ASET/PERSEDIAAN TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='9' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>    
    <th class='head0' align='center' >No Dokumen</td>    
    <th class='head0' align='center' >Tanggal Dokumen</td>
    <th class='head1' >Nilai BAST</td>
    <th class='head1'  align='left' >Uraian Dokumen</td>
    <th class='head0' >Akun</td>
    <th class='head0' >Jenis</td>
    <th class='head1' >Keterangan</td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $URAI=substr($row1["URAIAN_DOKUMEN"], 0,50);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center'>". $row1["KODE_SATKER"] ."</td>
    <td  align='center'>". $row1["NO_DOKUMEN"] . "</td>
    <td  align='center'>". $row1["TGL_DOKUMEN"] . "</td>
    <td  align='center'>". $row1["NILAI_BAST"] . "</td>
    <td  align='center'>". $URAI . "</td>
    <td  align='center'>". $row1["AKUN"] . "</td>
    <td  align='center'>". $row1["JENIS"] . "</td>
    <td  align='left'>". $row1["KETERANGAN"] . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>