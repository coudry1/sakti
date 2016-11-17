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

$sql  = oci_parse($conn, "select KODE, APPROVE_SPAN,  JENIS_BIAYA, TAHUN_AWAL from 
sakti_app.ANG_T_KOMPONEN where TAHUN_AWAL >=2015");


oci_execute($sql);
echo "
<table height='50px' width='1150px' align='center' border='1'>
<tr><td colspan='4' align='center'><strong>Revisi DIPA & POK : ".$today."</strong></td></tr>
  <tr>
    <th class='head0' nosort'>KODE </td>
    <th class='head1' >TANGGAL </td>
    <th class='head0'  >JENIS  </td>
    <th class='head1' >TAHUN </td>
  </tr>

 ";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
//$KAS_T=number_format($row1["KAS_TUNAI"],0,",",".");
//$KAS_B=number_format($row1["KAS_BANK"],0,",",".");

//<td width='200px' align='right'>". $KAS_T . ",-</td>
 // <td width='200px' align='right'>". $KAS_B . ",-</td>
 
 echo     "
  
  <tr class='gradeX'>
    <td width='50px'>". $row1["KODE"] ."</td>
    <td width='200px'>". $row1["APPROVE_SPAN"] . "</td>
	 <td width='200px'>". $row1["JENIS_BIAYA"] . "</td>
	 <td width='200px'>". $row1["TAHUN_AWAL"] . "</td>
 
  </tr>
 ";
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>