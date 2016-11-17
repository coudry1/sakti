<?php error_reporting(0); ?>
<link href="../css/table_white.css" rel="stylesheet">	
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
include "../koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$sql  = oci_parse($conn, "select substr(kode_coa,12,6) Akun, substr(kode_coa,19,7)  Program, substr(kode_coa,27,7) Output,  substr(kode_coa,35,10)  Dana, substr(kode_coa,52,1) Kewenangan, sum(Pagu) Pagu_Blokir, sum(realisasi_kom) realisasi_kom, sum(realisasi_ben) realisasi_ben, sum(realisasi_spm) realisasi_spm, sum(realisasi_glp) realisasi_glp, sum(sisa_pagu) sisa_pagu from SAKTI_APP.GLP_T_FA_HEADER where substr(kode_coa,1,6) in ('527027','527031','527048','527052','531293','579330','015114','015117','613811','015116','015115') group by substr(kode_coa,12,6),  substr(kode_coa,19,7),  substr(kode_coa,27,7),  substr(kode_coa,35,10), substr(kode_coa,52,1) order by  substr(kode_coa,12,6), kewenangan asc");
oci_define_by_name($sql,'DESKRIPSI',$deskripsi);
oci_execute($sql);
oci_fetch($sql);
echo "
<table height='50px' width='1398px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='12' align='center'>&nbsp;</td></tr>
<tr><td colspan='12' align='left'></td></tr>
<tr><td colspan='12' align='center'><strong>LAPORAN KONSOLIDASI FA</strong></td></tr>
<tr><td colspan='12' align='center'><strong>LINGKUP KANWIL DKI JAKARTA</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='12' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1400px' align='center' border='1'>
  <tr>
    <td style='vertical-align:middle;'><strong>No. </strong></td>
    <th class='head1' > Akun </td>
    <th class='head0' > Program </td>
    <th class='head1' > Output </td>
    <th class='head1' > Dana </td>
    <th class='head1' > Kw </td>
    <th class='head1' > Pagu - Blokir </td>
    <th class='head1' > Komitmen </td>
    <th class='head1' > Bendahara </td>
    <th class='head1' > Pembayaran </td>
    <th class='head1' > GLP </td>
    <th class='head1' > Sisa Pagu </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$pagu=number_format($row1["PAGU_BLOKIR"],0,",",".");
$realisasi_kom=number_format($row1["REALISASI_KOM"],0,",",".");
$realisasi_ben=number_format($row1["REALISASI_BEN"],0,",",".");
$realisasi_spm=number_format($row1["REALISASI_SPM"],0,",",".");
$realisasi_glp=number_format($row1["REALISASI_GLP"],0,",",".");
$sisa_pagu=number_format($row1["SISA_PAGU"],0,",",".");
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td width='100px'>". $row1["AKUN"] . "</td>
    <td width='100px'>". $row1["PROGRAM"] . "</td>
    <td width='100px'>". $row1["OUTPUT"] . "</td>
    <td width='100px'>". $row1["DANA"] . "</td>
    <td width='100px'>". $row1["KEWENANGAN"] . "</td>
    <td width='100px' align='right'>". $pagu . ",-</td>
    <td width='100px' align='right'>". $realisasi_kom .",-</td>
    <td width='100px' align='right'>". $realisasi_ben .",-</td>
    <td width='100px' align='right'>". $realisasi_spm .",-</td>
    <td width='100px' align='right'>". $realisasi_glp .",-</td>
    <td width='100px' align='right'>". $sisa_pagu .",-</td>
  </tr>
 ";
  $no++; 
}
echo "</table>";

oci_free_statement($sql);
oci_close($conn);
?>