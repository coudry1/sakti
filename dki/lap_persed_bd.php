<?php error_reporting(0); ?>
<link href="../css/table_white.css" rel="stylesheet">	
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='?p=lpbd&q=' + val;
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
<option value ="527027"> KANWIL DITJEN PERBENDAHARAAN PROVINSI DKI JAKARTA</option>
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

$sql  = oci_parse($conn, "select * from (select id,kode_satker,tgl_kwitansi,no_kwitansi,kode_akun,keterangan
from sakti_app.ben_t_kwitansi_header
where kode_satker='$kdsatker' and non_barang=1 and status_barang=0 and deleted=0) a
inner join
(
select distinct kwitansi_id from sakti_app.ben_t_kwitansi_detail 
where substr(kode_sub_sub_kelompok,1,1)='1'
) b
on a.id=b.kwitansi_id order by tgl_kwitansi desc");

oci_execute($sql);

if ($kdsatker!='') {
echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='6'align='center'>&nbsp;</td></tr>
<tr><td colspan='6'align='left'></td></tr>
<tr><td colspan='6' align='center'><strong>BELUM PENDETILAN KWITANSI MODUL PERSEDIAAN</strong></td></tr>
<tr border='0'><td colspan='6'align='center'><strong>". $nama_satker ."</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>  
    <th align='center' ><strong>Kode Satker </strong></td>
    <th align='center' ><strong>Tanggal Kuitansi</strong> </td>
    <th class='head0' >No Kuitansi </td>
    <th class='head1' >Kode Akun </td>
    <th class='head1' >Keterangan </td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,60);
 echo     "
  <tr class='gradeX'>
  	 <td>$no.</td>
    <td width='20px' align='center'>". $row1["KODE_SATKER"] ."</td>
    <td width='130px' align='center'>". $row1["TGL_KWITANSI"] . "</td>
    <td width='200px'>". $row1["NO_KWITANSI"] . "</td>
    <td>". $row1["KODE_AKUN"] . "</td>
    <td width='800px' >". $KET . "</td>
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