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


$sql  = oci_parse($conn, "select KODE_SATKER, NO_BAST, TGL_BAST, PROGRESS_PEKERJAAN, STATUS_DIBAYAR from SAKTI_APP.KOM_T_BAST_HEADER WHERE   kode_satker in ('527027','527031','527048','527052','531293','579330','015114','015117','613811','015116','015115') and ID_BAST IN (SELECT ID_BAST FROM SAKTI_APP.KOM_T_BAST_DETAIL WHERE IS_DICATAT = 0)");
oci_execute($sql);


echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='6'align='center'>&nbsp;</td></tr>
<tr><td colspan='6'align='left'></td></tr>
<tr><td colspan='6' align='center'><strong>BELUM PENDETILAN KONTRAKTUAL MODUL PERSEDIAAN</strong></td></tr>
<tr><td colspan='6' align='center'><strong>LINGKUP KANWIL DKI JAKARTA</strong></td></tr>
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


oci_free_statement($sql);
oci_close($conn);
?>