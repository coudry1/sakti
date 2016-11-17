<link href="../css/table_white.css" rel="stylesheet">
<?php
include "../koneksi.php";
error_reporting(0);
if (isset($_GET['q'])) $kdsatker= $_GET['q'];	
if (isset($_GET['b'])) $bulan= $_GET['b'];	
 
$satker  = oci_parse($conn, "select kode , deskripsi nama_satker from SAKTI_APP.ADM_R_SATKER where kode='$kdsatker'" );
oci_define_by_name($satker,'NAMA_SATKER',$nama_satker);
oci_execute($satker);
oci_fetch($satker);


?>
	
<SCRIPT language=JavaScript>
function reload1(form)
{
var val=form.lsss.options[form.lsss.options.selectedIndex].value;
self.location='?lap_bku.php&q=<?php echo $kdsatker; ?>&b=' + val;
}
</script>
			
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='?lap_bku.php&b=<?php echo $bulan; ?>&q=' + val;
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


<table width='55%' align='center'>
<tr><td>
<div align='center'>
<form action="../lap_bku.php" method="post">
<select name="fa" id="fa" onChange="reload(this.form)">
<?php
if ($kdsatker==''){echo "<option value=''>--- PILIH SATKER ---</option>";} else {echo "<option>$nama_satker</option>"; } ?>
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
</td>  
<td align='left'>
<form action="../lap_bku.php" method="post">
<select name="lsss" id="lsss" onChange="reload1(this.form)">
<?php if ($bulan==''){echo "<option value=''>--- BULAN ---</option>";} else {echo "<option>$bulan</option>"; }?>
<option value ="01"> 01 </option>
<option value ="02"> 02 </option>
<option value ="03"> 03 </option>
<option value ="04"> 04 </option>
<option value ="05"> 05 </option>
<option value ="06"> 06 </option>
<option value ="07"> 07 </option>
<option value ="08"> 08 </option>
<option value ="09"> 09 </option>
<option value ="10"> 10 </option>
<option value ="11"> 11 </option>
<option value ="12"> 12 </option>
  </select>
</td>
</tr>
</table>  
<br>

<?php 


include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 
$bulan_lalu=$bulan-1;

$saldo  = oci_parse($conn, "select sum(debet)-sum(kredit) saldo_lalu from sakti_app.BEN_T_BUKU_BEN_PENG
where kode_satker='$kdsatker' and deleted='0' and extract(month from tgl_transaksi)< $bulan
and substr(kode_buku_pembantu,5,1)!='3'");
oci_define_by_name($saldo,'SALDO_LALU',$saldolalu);
oci_execute($saldo);
oci_fetch($saldo);




$sql  = oci_parse($conn, "select tgl_transaksi, no_referensi, uraian, debet, kredit from sakti_app.BEN_T_BUKU_BEN_PENG
where kode_satker='$kdsatker' and deleted='0' and extract(month from tgl_transaksi)='$bulan'
and substr(kode_buku_pembantu,5,1)!='3' group by tgl_transaksi, no_referensi, uraian, debet, kredit
order by  tgl_transaksi");

oci_execute($sql);

$saldo_lalu=number_format($saldolalu,0,",",".");
if ($kdsatker!='' and $bulan!='') {
echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='7'align='center'>&nbsp;</td></tr>
<tr><td colspan='7'align='left'></td></tr>
<tr><td colspan='7' align='center'><strong>LAPORAN BUKU KAS UMUM BULAN "; 
if ($bulan==01) { echo "JANUARI TAHUN 2016";}
else if ($bulan==02) { echo "PEBRUARI TAHUN 2016";}
else if ($bulan==03) { echo "MARET TAHUN 2016";}
else if ($bulan==04) { echo "APRIL TAHUN 2016";}
else if ($bulan==05) { echo "MEI TAHUN 2016";}
else if ($bulan==06) { echo "JUNI TAHUN 2016";}
else if ($bulan==07) { echo "JULI TAHUN 2016";}
else if ($bulan==8) { echo "AGUSTUS TAHUN 2016";}
else if ($bulan==9) { echo "SEPTEMBER TAHUN 2016";}
else if ($bulan==10) { echo "OKTOBER TAHUN 2016";}
else if ($bulan==11) { echo "NOPEMBER TAHUN 2016";}
else if ($bulan==12) { echo "DESEMBER TAHUN 2016";} echo "</strong></td></tr>
<tr border='0'><td colspan='6'align='center'><strong>". $nama_satker ."</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr valign='middle'>
    <td style='vertical-align:middle;'><strong>No. </strong></td>
    <th valign='middle' class='head1'  > Tanggal Transaksi </td>
    <th style='valign:middle;' > Nomor Bukti </td>
    <th class='head1' > Uraian </td>
    <th class='head1' > Debet </td>
    <th class='head1' > Kredit </td>
  </tr>
  <tr>
    <td>  </td>
    <td> </td>
    <td> </td>
    <td><strong> Saldo Akhir Bulan ";
if ($bulan_lalu==01) { echo "Januari";}
else if ($bulan_lalu==02) { echo "Pebruari 2016";}
else if ($bulan_lalu==03) { echo "Maret 2016";}
else if ($bulan_lalu==04) { echo "April 2016";}
else if ($bulan_lalu==05) { echo "Mei 2016";}
else if ($bulan_lalu==06) { echo "Juni 2016";}
else if ($bulan_lalu==07) { echo "Juli 2016";}
else if ($bulan_lalu==8) { echo "Agustus 2016";}
else if ($bulan_lalu==9) { echo "September 2016";}
else if ($bulan_lalu==10) { echo "Oktober 2016";}
else if ($bulan_lalu==11) { echo "Nopember 2016";}
else if ($bulan_lalu==12) { echo "Desember 2016";} 

echo"	</strong></td>
    <td colspan='2' align='right'><strong>".$saldo_lalu.",-</strong> </td>
  </tr>
 ";
$saldo_akhir=$saldo_lalu-$row1["SALDO"];
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$debet=number_format($row1["DEBET"],0,",",".");
$kredit=number_format($row1["KREDIT"],0,",",".");
$saldo=number_format($row1["SALDO"],0,",",".");
$NOREFERENSI=substr($row1["NO_REFERENSI"], 0,20);
$URAI=substr($row1["URAIAN"], 0,55);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td width='150px' align='center'>". $row1["TGL_TRANSAKSI"] . "</td>
    <td width='250px'>". $NOREFERENSI . "</td>
    <td width='900px'>". $URAI . "</td>
    <td width='120px' align='right'>". $debet .",-</td>
    <td width='120px' align='right'>". $kredit .",-</td>
  </tr>
 ";
 $no++; 
}
include "koneksi.php";
$saldoin  = oci_parse($conn, "select sum(debet)-sum(kredit) saldo_ini from sakti_app.BEN_T_BUKU_BEN_PENG
where kode_satker='$kdsatker' and deleted='0' and extract(month from tgl_transaksi)<= $bulan
and substr(kode_buku_pembantu,5,1)!='3'");
oci_define_by_name($saldoin,'SALDO_INI',$saldoini);
oci_execute($saldoin);
oci_fetch($saldoin);

$saldo_ini=number_format($saldoini,0,",",".");

echo "
  <tr>
    <td>  </td>
    <td> </td>
    <td> </td>
    <td><strong>Jumlah Saldo Akhir</strong></td>
    <td colspan='2' align='right'><strong>".$saldo_ini.",-</strong> </td>
  </tr>
</table>";
}
else {};
oci_free_statement($sql);
oci_free_statement($satker);
oci_free_statement($saldo);
oci_free_statement($saldoini);
oci_close($conn);
?>