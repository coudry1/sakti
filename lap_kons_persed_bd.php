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

$sql  = oci_parse($conn, "select kode_satker,tgl_kwitansi,no_kwitansi,kode_akun,keterangan from sakti_app.BEN_T_KWITANSI_HEADER 
where substr(kode_akun,1,2)='52' and non_barang='1' and status_barang='0' and deleted='0'  and no_kwitansi not in(select no_bukti from sakti_app.PER_T_TRANS where asal_barang='KWITANSI') order by tgl_kwitansi desc");

oci_execute($sql);
echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='6'align='center'>&nbsp;</td></tr>
<tr><td colspan='6'align='left'></td></tr>
<tr><td colspan='6' align='center'><strong>KONSOLIDASI BELUM PENDETILAN KWITANSI MODUL PERSEDIAAN</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>
    <th class='head1' >Tanggal Kuitansi </td>
    <th class='head0' >No Kuitansi </td>
    <th class='head1' >Kode Akun </td>
    <th class='head1' >Keterangan </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,50);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td width='50px' align='center'>". $row1["KODE_SATKER"] ."</td>
    <td width='130px' align='center'>". $row1["TGL_KWITANSI"] . "</td>
    <td width='200px'>". $row1["NO_KWITANSI"] . "</td>
    <td>". $row1["KODE_AKUN"] . "</td>
    <td >". $KET . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>