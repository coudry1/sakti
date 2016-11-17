<?php error_reporting(0); ?>
<link href="css/table_white.css" rel="stylesheet">	
<script>
function Print() {
document.body.offsetHeight;
window.print();
}
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form name="form2" method="post" onSubmit="Print()" action="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Submit2" type="submit" class="button" value="PRINT">
<p>&nbsp;</p>
<?php 
include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$sql  = oci_parse($conn, "select a.kdsatker, b.deskripsi, a.AKUN, a.COA, a.pagu, a.sisa_pagu  from (
select substr(kode_coa,1,6) kdsatker,substr(kode_coa,12,6) AKUN,kode_coa COA, pagu, sisa_pagu  from sakti_app.GLP_T_FA_HEADER where sisa_pagu<'0' and substr(kode_coa,12,2)!='51' and deleted='0') a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kdsatker=b.kode");
oci_define_by_name($sql,'DESKRIPSI',$deskripsi);
oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='7'align='center'>&nbsp;</td></tr>
<tr><td colspan='7'align='left'></td></tr>
<tr><td colspan='7' align='center'><strong>PAGU MINUS (SELAIN 51)</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
  <td style='vertical-align:middle;'><strong>No. </strong></td>
    <th class='head1' > Kode Satker </td>
    <th class='head0' > Nama Satker </td>
    <th class='head1' > Akun </td>
    <th class='head1' > COA </td>
    <th class='head1' > Pagu </td>
    <th class='head1' > Sisa Pagu </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$sisa_pagu=number_format($row1["SISA_PAGU"],0,",",".");
$pagu=number_format($row1["PAGU"],0,",",".");
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td width='100px'>". $row1["KDSATKER"] . "</td>
    <td width='500px' align='left'>". $row1["DESKRIPSI"] . "</td>
    <td>". $row1["AKUN"] . "</td>
    <td>". $row1["COA"] . "</td>
    <td align='right'>". $pagu .",-</td>
    <td align='right'>". $sisa_pagu .",-</td>
  </tr>
 ";
 $no++; 
}
echo "</table>";

oci_free_statement($sql);
oci_close($conn);
?>