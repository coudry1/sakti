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

$sql  = oci_parse($conn, "Select i.kd_satker, i.deskripsi, i.SPM_akhir, decode(i.create_date_mat ,null,'0', i.create_date_mat ) create_date_mat, i.TUTUP_MAT, i.create_date_per, i.TUTUP_PER,
decode(j.created_date_glp ,null,'0', j.created_date_glp) create_date_glp,decode(i.tutup_glp ,null,'0', i.tutup_glp ) tutup_glp, 
decode(j.tutup_sementara ,null,'0', j.tutup_sementara ) tutup_sementara, decode(j.tutup_permanen ,null,'0', j.tutup_permanen) tutup_permanen from (
Select g.kd_satker,h.deskripsi, g.SPM_akhir, g.create_date_mat, g.TUTUP_MAT, g.create_date_per, g.TUTUP_PER, g.TUTUP_GLP from (
Select e.kd_satker, e.SPM_akhir, e.create_date_mat, e.TUTUP_MAT, e.create_date_per, e.TUTUP_PER, f.TUTUP_GLP from (
Select c.kd_satker, c.SPM_akhir, c.create_date_mat, c.TUTUP_MAT, d.create_date_per, d.TUTUP_PER from (
Select a.kd_satker, a.SPM_akhir, b.create_date_mat, decode(b.kode_sdata, 'AST',b.tutup_mat,'0') TUTUP_MAT from (
SELECT KD_SATKER,  MAX(TGL_SPM) SPM_Akhir FROM SAKTI_APP.SPM_T_SPP where deleted='0' GROUP BY KD_SATKER) a left join 
(select kode_satker, to_char(max(created_date), 'dd-mm-yyyy') create_date_mat, max(kode_periode) tutup_mat, kode_sdata from sakti_app.GLP_T_TUTUP_BUKU_MODUL 
where deleted='0'  and kode_sdata in ('AST') group by kode_satker, kode_sdata order by kode_satker asc) b on a.kd_satker=b.kode_satker) c left join
(select kode_satker,  to_char(max(created_date), 'dd-mm-yyyy') create_date_per, MAX(decode(kode_sdata, 'PER',kode_periode,'0')) TUTUP_PER from sakti_app.GLP_T_TUTUP_BUKU_MODUL 
where deleted='0'  and kode_sdata in ('PER') group by kode_satker) d on c.kd_satker=d.kode_satker) e left join
(select kode_satker, MAX(decode(kode_sdata, 'GLP',kode_periode,'0')) TUTUP_GLP from sakti_app.GLP_T_TUTUP_BUKU_MODUL 
where deleted='0'  and kode_sdata in ('GLP') group by kode_satker, kode_sdata) f on e.kd_satker=f.kode_satker) g left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) h on g.kd_satker=h.kode) i left join
(select kode_satker, to_char(max(created_date_glp),'dd-mm-yyyy') created_date_glp, max(tutup_sementara) tutup_sementara, max(tutup_permanen) tutup_permanen from (
select kode_satker, decode(modified_date, null, created_date, modified_date) created_date_glp, decode(status, '1', kode_periode,'0') tutup_sementara, decode(status, '2', kode_periode,'0') tutup_permanen from sakti_app.GLP_T_STATUS_TUTUP_BUKU) 
group by kode_satker) j on i.kd_satker = j.kode_satker");

oci_execute($sql);
$no = 1;
echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='12'align='center'>&nbsp;</td></tr>
<tr><td colspan='12'align='left'></td></tr>
<tr><td colspan='12' align='center'><strong>MONITORING PENGGUNAAN SAKTI</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='12' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
<tr ><td rowspan='2' style='vertical-align:middle;'><strong>No. </strong><td rowspan='2' style='vertical-align:middle;'><strong>Kode Satker </strong>
  </td>
</td>
  <td rowspan='2'  style='vertical-align:middle;'><strong>Uraian Satker </strong>
    </td>    
  </td>
  <td colspan='9' align='center'><strong>TANGGAL/ PERIODE TERAKHIR </strong></td></tr>
  <tr>
    <th class='head0' >Mengajukan SPM</td>
    <th class='head1' >Create MAT </td>
    <th class='head1' >Tutup MAT </td>
    <th class='head1' >Create PER </td>
    <th class='head1' >Tutup Persediaan </td>
    <th class='head1' >Create GLP </td>
    <th class='head1' >Tutup GLP </td>
    <th class='head1' >Tutup Sementara</td>
  <th class='head1' >Tutup Permanen</td>  </tr>
 ";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr>
    <td>$no.</td>
    <td>". $row1["KD_SATKER"] ."</td>
    <td align='left'>". $row1["DESKRIPSI"] ."</td>
    <td width='90px' align='right'>". $row1["SPM_AKHIR"] ."</td>
    <td width='90px' align='right'>". $row1["CREATE_DATE_MAT"] ."</td>
    <td width='90px' align='right'>". $row1["TUTUP_MAT"] ."</td>
    <td width='90px' align='right'>". $row1["CREATE_DATE_PER"] ."</td>
    <td width='90px' align='right'>". $row1["TUTUP_PER"] ."</td>
    <td width='90px' align='right'>". $row1["CREATE_DATE_GLP"] ."</td>
    <td width='90px' align='right'>". $row1["TUTUP_GLP"] ."</td>
    <td width='90px' align='right'>". $row1["TUTUP_SEMENTARA"] ."</td>
    <td width='90px' align='right'>". $row1["TUTUP_PERMANEN"] ."</td>
  </tr>                                            
 ";        
$no++; 
}
echo "</table>

";

oci_free_statement($sql);
oci_close($conn);
?>