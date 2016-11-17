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

$sql  = oci_parse($conn, "select c.kode_satker, c.kas_bank, c.kas_tunai, d.deskripsi from (
select a.kode_satker,b.kas_bank,  a.kas_tunai from (
select kode_satker, sum(jumlah) kas_tunai from SAKTI_APP.BEN_T_KAS_TUNAI_BEN_PENG where deleted='0'  group by kode_satker ) a left join
(select kode_satker, sum(jumlah) kas_bank from SAKTI_APP.BEN_T_KAS_BANK_BEN_PENG where deleted='0' group by kode_satker) b on a.kode_satker=b.kode_satker) c left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) d on c.kode_satker=d.kode  where kode_satker in ('527027','527031','527048','527052','531293','579330','015114','015117','613811','015116','015115') order by kas_tunai desc");

oci_execute($sql);
echo "
<table height='50px' width='1298px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='5' align='center'>&nbsp;</td></tr>
<tr><td colspan='5' align='left'></td></tr>
<tr><td colspan='5' align='center'><strong>SALDO KAS TUNAI DAN KAS BANK BENDAHARA PENGELUARAN</strong></td></tr>
<tr><td colspan='5' align='center'><strong>LINGKUP KANWIL DKI JAKARTA</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1300px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>
    <th class='head0' nosort'>Kode Satker </td>
    <th class='head1' >Nama Satker </td>
    <th class='head0'  >Kas Tunai </td>
    <th class='head1' >Kas Bank </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$KAS_T=number_format($row1["KAS_TUNAI"],0,",",".");
$KAS_B=number_format($row1["KAS_BANK"],0,",",".");
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td width='50px'>". $row1["KODE_SATKER"] ."</td>
    <td width='700px'>". $row1["DESKRIPSI"] . "</td>
    <td width='200px' align='right'>". $KAS_T . ",-</td>
    <td width='200px' align='right'>". $KAS_B . ",-</td>
  </tr>
 ";
  $no++; 
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>