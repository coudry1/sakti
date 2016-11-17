<?php error_reporting(0); ?>
<link href="../css/table_white.css" rel="stylesheet">	
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='?p=lf&q=' + val;
}
</script>
				  
<script>
function Print() {
document.body.offsetHeight;
window.print();
}
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form name="form2" method="post" onSubmit="Print()" action="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Submit2" type="submit" class="button" value="PRINT">

<?php if (isset($_GET['q'])) $kdsatker= $_GET['q'];	?>
<div align='center'>
<form action="?p=fa" method="post">
<select name="fa" id="fa" onChange="reload(this.form)">
<option value =""> --- PILIH SATKER --- </option>
<option value ="527027"> KANWIL DITJEN PERBENDAHARAAN PROVINSI DKI JAKARTA </option>
<option value ="613811"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KHUSUS PINJAMAN DAN HIBAH</option>
<option value ="015116"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KHUSUS PENERIMAAN        </option>
<option value ="015117"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KHUSUS INVESTASI         </option>
<option value ="015115"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA VII              </option>
<option value ="015114"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA VI               </option>
<option value ="579330"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA V                </option>
<option value ="531293"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA IV               </option>
<option value ="527052"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA III              </option>
<option value ="527048"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA II               </option>
<option value ="527031"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA I                </option>
  </select></div>
  
<br>
<br>

<?php 
include "../koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$satker  = oci_parse($conn, "select kode , deskripsi nama_satker from SAKTI_APP.ADM_R_SATKER where kode='$kdsatker'" );
oci_define_by_name($satker,'NAMA_SATKER',$nama_satker);
oci_execute($satker);
oci_fetch($satker);

$sql  = oci_parse($conn, "select a.kdsatker, b.deskripsi, a.kode_coa, a.pagu, a.realisasi_kom, a.realisasi_ben, realisasi_spm, a.realisasi_glp, a.sisa_pagu from (select substr(kode_coa,1,6) kdsatker, kode_coa, pagu, realisasi_kom, realisasi_ben, realisasi_spm, realisasi_glp, sisa_pagu from SAKTI_APP.GLP_T_FA_HEADER where substr(kode_coa,1,6)='$kdsatker' order by kode_coa) a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kdsatker=b.kode");
oci_define_by_name($sql,'DESKRIPSI',$deskripsi);
oci_execute($sql);
if ($kdsatker!='') {
echo "
<table height='50px' width='1498px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='8'align='center'>&nbsp;</td></tr>
<tr><td colspan='8'align='center'></td></tr>
<tr><td colspan='8' align='center'><strong>LAPORAN FA </strong></td></tr>
<tr border='0'><td colspan='8'align='center'><strong>". $nama_satker ."</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='8' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1500px' align='center' border='1'>
  <tr>
    <td style='vertical-align:middle;'><strong>No. </strong></td>
    <td align='center'> <strong>Mata Anggaran</strong> </td>
    <td align='center'> <strong>Pagu-Blokir</strong> </td>
    <td align='center'> <strong>Komitmen</strong> </td>
    <td align='center'> <strong>Bendahara</strong> </td>
    <td align='center'> <strong>Pembayaran</strong> </td>
    <td align='center'> <strong>GLP</strong> </td>
    <td align='center'> <strong>Sisa Pagu</strong> </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$pagu=number_format($row1["PAGU"],0,",",".");
$realisasi_kom=number_format($row1["REALISASI_KOM"],0,",",".");
$realisasi_ben=number_format($row1["REALISASI_BEN"],0,",",".");
$realisasi_spm=number_format($row1["REALISASI_SPM"],0,",",".");
$realisasi_glp=number_format($row1["REALISASI_GLP"],0,",",".");
$sisa_pagu=number_format($row1["SISA_PAGU"],0,",",".");
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td width='700px'>". $row1["KODE_COA"] . "</td>
    <td width='200px' align='right'>". $pagu . ",-</td>
    <td width='200px' align='right'>". $realisasi_kom .",-</td>
    <td width='200px' align='right'>". $realisasi_ben .",-</td>
    <td width='200px' align='right'>". $realisasi_spm .",-</td>
    <td width='200px' align='right'>". $realisasi_glp .",-</td>
    <td width='200px' align='right'>". $sisa_pagu .",-</td>
  </tr>
 ";
  $no++; 
}
echo "</table>";
}
else{};

oci_free_statement($sql);
oci_close($conn);
?>