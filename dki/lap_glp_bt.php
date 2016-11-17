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

$sql  = oci_parse($conn, "select kode_satker
,max(decode(kode_periode,'2015-12',status,'0')) des15
,max(decode(kode_periode,'2016-01',status,'0')) jan16
,max(decode(kode_periode,'2016-02',status,'0')) feb16
,max(decode(kode_periode,'2016-03',status,'0')) mar16
,max(decode(kode_periode,'2016-04',status,'0')) apr16
,max(decode(kode_periode,'2016-05',status,'0')) mei16
,max(decode(kode_periode,'2016-06',status,'0')) jun16
,max(decode(kode_periode,'2016-07',status,'0')) jul16
,max(decode(kode_periode,'2016-08',status,'0')) ags16
,max(decode(kode_periode,'2016-09',status,'0')) sep16
,max(decode(kode_periode,'2016-10',status,'0')) okt16
,max(decode(kode_periode,'2016-11',status,'0')) nop16
,max(decode(kode_periode,'2016-12',status,'0')) des16
from sakti_app.GLP_T_STATUS_TUTUP_BUKU where kode_satker in ('527027','527031','527048','527052','531293','579330','015114','015117','613811','015116','015115') and deleted='0' and status is not null
group by kode_satker");

oci_execute($sql);
echo "
<table height='50px' width='1148px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='15' align='center'>&nbsp;</td></tr>
<tr><td colspan='15' align='left'></td></tr>
<tr><td colspan='15' align='center'><strong>MONITORING TUTUP BUKU MODUL GLP</strong></td></tr>
<tr><td colspan='15' align='center'><strong>LINGKUP KANWIL DKI JAKARTA</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1150px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>   
    <th class='head0' nosort'>Kode Satker </td>
    <th class='head1' >Des15 </td>
    <th class='head0' >Jan16 </td>
    <th class='head1' >Peb16 </td>
    <th class='head1' >Mar16 </td>
    <th class='head1' >Apr16 </td>
    <th class='head1' >Mei16 </td>
    <th class='head1' >Jun16 </td>
    <th class='head1' >Jul16 </td>
    <th class='head1' >Agu16 </td>
    <th class='head1' >Sep16 </td>
    <th class='head1' >Okt16 </td>
    <th class='head1' >Nov16 </td>
    <th class='head1' >Des16 </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr>
  	 <td>$no.</td>  
    <td width='50px'>". $row1["KODE_SATKER"] ."</td>
    <td width='200px' align='right'>". $row1["DES15"] ."</td>
    <td width='200px' align='right'>". $row1["JAN16"] ."</td>
    <td width='200px' align='right'>". $row1["FEB16"] ."</td>
    <td width='200px' align='right'>". $row1["MAR16"] ."</td>
    <td width='200px' align='right'>". $row1["APR16"] ."</td>
    <td width='200px' align='right'>". $row1["MEI16"] ."</td>
    <td width='200px' align='right'>". $row1["JUN16"] ."</td>
    <td width='200px' align='right'>". $row1["JUL16"] ."</td>
    <td width='200px' align='right'>". $row1["AGS16"] ."</td>
    <td width='200px' align='right'>". $row1["SEP16"] ."</td>
    <td width='200px' align='right'>". $row1["OKT16"] ."</td>
    <td width='200px' align='right'>". $row1["NOP16"] ."</td>
    <td width='200px' align='right'>". $row1["DES16"] ."</td>
  </tr>                                            
 ";
   $no++;  
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>