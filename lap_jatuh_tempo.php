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

$sql  = oci_parse($conn, "select d.kode, d.deskripsi, c.jatuh_tempo, kd_jns_spp, no_spp, uraian from
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) d
right join
(select substr(a.created_by, 6,6)satker, kd_jatuh_tempo, jatuh_tempo, kd_jns_spp, no_spp, uraian  from
(select created_by, kd_jatuh_tempo, kd_jns_spp, no_spp, uraian from sakti_app.spm_t_spp where deleted ='0' and kd_jatuh_tempo not in ('0', '99')) a
left join
(select * from sakti_app.ADM_R_JATUH_TEMPO) b 
on a.kd_jatuh_tempo = B.KODE) c
on d.kode = c.satker");

oci_execute($sql);
echo "
<table height='50px' width='1398px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='7' align='center'>&nbsp;</td></tr>
<tr><td colspan='7' align='left'></td></tr>
<tr><td colspan='7' align='center'><strong>JATUH TEMPO TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='7' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1400px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>
    <th class='head0' nosort'>Kd Satker </td>
    <th class='head1' >Nama Satker </td>
    <th class='head0'  >Jatuh Tempo </td>
    <th class='head1' >Kd_Jns_SPP </td>
    <th class='head1' >No. SPP </td>
    <th class='head1' >Uraian </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$URAIAN=substr($row1["URAIAN"], 0,25);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td width='10px' align='center'>". $row1["KODE"] ."</td>
    <td align='left'>". $row1["DESKRIPSI"] . "</td>
    <td width='1px' align='center'>". $row1["JATUH_TEMPO"] . "</td>
    <td width='1px' align='center'>". $row1["KD_JNS_SPP"] . "</td>
    <td width='1px' align='center'>". $row1["NO_SPP"] . "</td>
    <td align='left'>". $URAIAN . ",-</td>
  </tr>
 ";
  $no++; 
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>