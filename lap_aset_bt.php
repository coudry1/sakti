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

$sql  = oci_parse($conn, "select kode_satker
,max(decode(kode_periode,'2015-12',kode_sdata)) des15
,max(decode(kode_periode,'2016-01',kode_sdata)) jan16
,max(decode(kode_periode,'2016-02',kode_sdata)) feb16
,max(decode(kode_periode,'2016-03',kode_sdata)) mar16
,max(decode(kode_periode,'2016-04',kode_sdata)) apr16
,max(decode(kode_periode,'2016-05',kode_sdata)) mei16
,max(decode(kode_periode,'2016-06',kode_sdata)) jun16
,max(decode(kode_periode,'2016-07',kode_sdata)) jul16
,max(decode(kode_periode,'2016-08',kode_sdata)) ags16
,max(decode(kode_periode,'2016-09',kode_sdata)) sep16
,max(decode(kode_periode,'2016-10',kode_sdata)) okt16
,max(decode(kode_periode,'2016-11',kode_sdata)) nop16
,max(decode(kode_periode,'2016-12',kode_sdata)) des16
from sakti_app.GLP_T_TUTUP_BUKU_MODUL where 
deleted='0' and kode_sdata='AST'
group by kode_satker");

oci_execute($sql);
echo "
<table height='50px' width='1148px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='15' align='center'>&nbsp;</td></tr>
<tr><td colspan='15' align='left'></td></tr>
<tr><td colspan='15' align='center'><strong>MONITORING TUTUP BUKU MODUL ASET</strong></td></tr>
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