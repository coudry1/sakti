<?php error_reporting(0); ?>
<link href="css/table_white.css" rel="stylesheet">	
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='lap_tidak_wajar.php?q=' + val;
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
<option value="" >-- PILIH --</option>
<option value="1" >-- KWITANSI TIDAK WAJAR --</option>
<option value="2" >-- KONTRAKTUAL TIDAK WAJAR --</option>
<option value="3" >-- NON KONTRAKTUAL TIDAK WAJAR --</option>
  </select></div>
<br><br>
<?php 
include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

if ($kdsatker==0 or $kdsatker==1) {
$sql  = oci_parse($conn, "select * from (
select a.kode_satker,a.no_kwitansi,a.tgl_kwitansi,a.akun,a.keterangan,a.jumlah,b.kel_barang, 
case 
when a.akun!='53' and b.kel_barang!='1' then 'Aset dengan selain 53'
when a.akun!='52' and b.kel_barang='1' then 'Persediaan selain 52'
else 'Wajar' 
end status
from 
(select id,kode_satker,no_kwitansi,tgl_kwitansi,substr(kode_akun,1,2) akun, keterangan, jumlah from sakti_app.BEN_T_KWITANSI_HEADER where deleted='0' and non_barang='1') a
join
(select distinct kwitansi_id,substr(kode_sub_sub_kelompok,1,1) kel_barang from SAKTI_APP.BEN_T_KWITANSI_DETAIL) b
on a.id=b.kwitansi_id
order by kode_satker)
where status!='Wajar'");

oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='9'align='center'>&nbsp;</td></tr>
<tr><td colspan='9'align='left'></td></tr>
<tr><td colspan='9' align='center'><strong>KWITANSI TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='9' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>    
    <th class='head0' align='center' >No Kwitansi</td>
    <th class='head1' >Tanggal Kwitansi</td>
    <th class='head0' >Akun</td>
    <th class='head0' >Keterangan </td>
    <th class='head1' >Jumlah</td>
    <th class='head1' >Kel. Barang</td>
    <th class='head1' >Status</td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,50);
 $jml=number_format($row1["JUMLAH"],0,",",".");
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center'>". $row1["KODE_SATKER"] ."</td>
    <td  align='center'>". $row1["NO_KWITANSI"] . "</td>
    <td  align='center'>". $row1["TGL_KWITANSI"] . "</td>
    <td  align='center'>". $row1["AKUN"] . "</td>
    <td  align='left'>". $KET . "</td>
    <td  align='right'>". $jml . ",-</td>
    <td align='center' >". $row1["KEL_BARANG"] . "</td>
    <td>". $row1["STATUS"] . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";
}
else if ($kdsatker==2) {

$sql  = oci_parse($conn, "select * from(
select c.kode_satker,c.no_bast,c.tgl_bast,c.nilai,c.akun,d.jenis, 
case 
when c.akun!='53' and d.jenis!='1' then 'Aset dengan selain 53'
when c.akun='53' and d.jenis='1' then 'Persediaan dengan 53'
else 'Wajar' 
end keterangan
from 
(select * from 
(select id_bast no_urut,id_dist_coa,kode_satker,no_bast,tgl_bast from sakti_app.KOM_T_BAST_HEADER where deleted='0') a
join
(select id_dist_coa bas,substr(kode_glp_t_coa,12,2) akun,nilai from sakti_app.KOM_T_DIST_COA) b
on a.id_dist_coa = b.bas) c
join 
(select id_bast,substr(kode_barang,1,1) jenis from sakti_app.KOM_T_BAST_DETAIL 
where is_dicatat='1') d 
on c.no_urut=d.id_bast
order by kode_satker)
where keterangan!='Wajar'");

oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='8'align='center'>&nbsp;</td></tr>
<tr><td colspan='8'align='left'></td></tr>
<tr><td colspan='8' align='center'><strong>KONTRAKTUAL TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='8' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>    
    <th class='head0' align='center' >No BAST</td>
    <th class='head1' >Tanggal BAST</td>
    <th class='head1' >Nilai</td>
    <th class='head0' >Akun</td>
    <th class='head0' >Jenis</td>
    <th class='head1' >Keterangan</td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $KET=substr($row1["KETERANGAN"], 0,50);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center'>". $row1["KODE_SATKER"] ."</td>
    <td  align='center'>". $row1["NO_BAST"] . "</td>
    <td  align='center'>". $row1["TGL_BAST"] . "</td>
    <td  align='center'>". $row1["NILAI"] . "</td>
    <td  align='center'>". $row1["AKUN"] . "</td>
    <td  align='center'>". $row1["JENIS"] . "</td>
    <td  align='left'>". $KET . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";
}
else if ($kdsatker==3) {$sql  = oci_parse($conn, "select * from(
select a.kode_satker,a.no_dokumen,a.tgl_dokumen,a.nilai_bast,a.uraian_dokumen,a.akun,b.jenis, 
case 
when a.akun!='53' and b.jenis!='1' then 'Aset dengan selain 53'
when a.akun='53' and b.jenis='1' then 'Persediaan dengan 53'
else 'Wajar' 
end keterangan
from 
(select id_dokumen no_urut,kode_satker,no_dokumen,tgl_dokumen,uraian_dokumen,substr(kode_glp_t_coa,12,2) akun,nilai_bast from sakti_app.KOM_T_BAST_NONK_HEADER where deleted='0') a
join
(select distinct id_dokumen,substr(kode_barang,1,1) jenis from SAKTI_APP.KOM_T_BAST_NONK_DETAIL where is_dicatat='1') b
on a.no_urut=b.id_dokumen
order by kode_satker)
where keterangan!='Wajar'");

oci_execute($sql);

echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='9'align='center'>&nbsp;</td></tr>
<tr><td colspan='9'align='left'></td></tr>
<tr><td colspan='9' align='center'><strong>NON KONTRAKTUAL TIDAK WAJAR</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='9' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>    
    <th class='head0' align='center' >Kode Satker </td>    
    <th class='head0' align='center' >No Dokumen</td>    
    <th class='head0' align='center' >Tanggal Dokumen</td>
    <th class='head1' >Nilai BAST</td>
    <th class='head1'  align='left' >Uraian Dokumen</td>
    <th class='head0' >Akun</td>
    <th class='head0' >Jenis</td>
    <th class='head1' >Keterangan</td>
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 $URAI=substr($row1["URAIAN_DOKUMEN"], 0,50);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center'>". $row1["KODE_SATKER"] ."</td>
    <td  align='center'>". $row1["NO_DOKUMEN"] . "</td>
    <td  align='center'>". $row1["TGL_DOKUMEN"] . "</td>
    <td  align='center'>". $row1["NILAI_BAST"] . "</td>
    <td  align='center'>". $URAI . "</td>
    <td  align='center'>". $row1["AKUN"] . "</td>
    <td  align='center'>". $row1["JENIS"] . "</td>
    <td  align='left'>". $row1["KETERANGAN"] . "</td>
  </tr>
 ";
   $no++;  
}
echo "</table>

";};
oci_free_statement($sql);
oci_close($conn);
?>