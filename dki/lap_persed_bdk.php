<?php error_reporting(0); ?>
<link href="../css/table_white.css" rel="stylesheet">	
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='?p=lpbdk&q=' + val;
}
</script>
<script>function Print() {
document.body.offsetHeight;
window.print();
}
</script>
<br>
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
<br><br>
<?php 
include "../koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$satker  = oci_parse($conn, "select kode , deskripsi nama_satker from SAKTI_APP.ADM_R_SATKER where kode='$kdsatker'" );
oci_define_by_name($satker,'NAMA_SATKER',$nama_satker);
oci_execute($satker);
oci_fetch($satker);

$sql  = oci_parse($conn, "select KODE_SATKER, NO_BAST, TGL_BAST, PROGRESS_PEKERJAAN, STATUS_DIBAYAR from SAKTI_APP.KOM_T_BAST_HEADER WHERE KODE_SATKER='$kdsatker' and ID_BAST IN (SELECT ID_BAST FROM SAKTI_APP.KOM_T_BAST_DETAIL WHERE IS_DICATAT = 0)");

oci_execute($sql);

if ($kdsatker!='') {
echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='6'align='center'>&nbsp;</td></tr>
<tr><td colspan='6'align='left'></td></tr>
<tr><td colspan='6' align='center'><strong>BELUM PENDETILAN KONTRAKTUAL MODUL PERSEDIAAN</strong></td></tr>
<tr border='0'><td colspan='6'align='center'><strong>". $nama_satker ."</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' width='100px'>Kode Satker </td>
    <th class='head1' >Nomor BAST </td>
    <th class='head0' >Tanggal BAST </td>
    <th class='head1' >Progress Pekerjaan </td>
    <th class='head1' >Status Dibayar </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
  echo     "
  <tr class='gradeX'>
  	 <td>$no.</td>  
    <td width='20px' align='center'>". $row1["KODE_SATKER"] ."</td>
    <td width='300px'>". $row1["NO_BAST"] . "</td>
    <td width='130px' align='center'>". $row1["TGL_BAST"] . "</td>
    <td>". $row1["PROGRESS_PEKERJAAN"] . "</td>
    <td>". $row1["STATUS_DIBAYAR"] . "</td>
  </tr>
 ";
   $no++; 
}
echo "</table>
";
}
else{};

oci_free_statement($sql);
oci_close($conn);
?>