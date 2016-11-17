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

$sql  = oci_parse($conn, "select a.kode_satker, b.deskripsi, a.Periode, a.status from (
select kode_satker,max(kode_periode) Periode, decode(status,'1','TUTUP_SEMENTARA','2','TUTUP_PERMANEN') status from sakti_app.GLP_T_STATUS_TUTUP_BUKU 
where status!='0' and (substr(kode_periode,6,2)<(EXTRACT(month FROM sysdate)-2) or substr(kode_periode,1,4)='2015') group by kode_satker, status ) a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kode_satker=b.kode where kode_satker in ('527027','527031','527048','527052','531293','579330','015114','015117','613811','015116','015115')");
oci_define_by_name($sql,'DESKRIPSI',$deskripsi);
oci_execute($sql);

echo "

<table height='50px' width='1150px' align='center' border='1'>
<tr><td colspan='4' align='center'><strong>PERIODE TUTUP TERAKHIR < 2 BULAN DARI SYSDATE  HARI INI TANGGAL: ".$today."</strong></td></tr>
<tr><td colspan='4' align='center'><strong>LINGKUP KANWIL DKI JAKARTA</strong></td></tr>
  <tr>
    <th class='head1' > Kode Satker </td>
    <th class='head0' > Nama Satker </td>
    <th class='head1' > Periode_akhir </td>
    <th class='head1' > Status </td>
  </tr>

 ";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr class='gradeX'>
    <td width='70px'>". $row1["KODE_SATKER"] . "</td>
    <td width='650px' align='left'>". $row1["DESKRIPSI"] . "</td>
    <td>". $row1["PERIODE"] . "</td>
    <td>". $row1["STATUS"] . "</td>
  </tr>
 ";
}
echo "</table>";

oci_free_statement($sql);
oci_close($conn);
?>