<?php 
include "koneksi.php";

$sql  = oci_parse($conn, "select e.kd_satker,f.deskripsi nama_satker, e.Jenis_tagihan, e.created_date, e.uraian, e.nilai_rupiah , e.tgl_spp, e.stage from (
select c.kd_satker, d.deskripsi Jenis_tagihan, c.created_date,  c.uraian, c.nilai_rupiah, c.tgl_spp, c.stage from (
select a.kd_satker, a.kd_jns_spp, a.created_date, a.uraian, a.nilai_rupiah, a.tgl_spp, b.deskripsi stage from (
SELECT  kd_satker, kd_jns_spp, created_date, uraian, jml_pengeluaran nilai_rupiah, tgl_spp, sts_data  FROM SAKTI_APP.SPM_T_SPP where trim(kd_jns_spp)!= '611'  and ((sts_data in ('SPM_STS_DATA_01','SPM_STS_DATA_02','SPM_STS_DATA_04','SPM_STS_DATA_05','SPM_STS_DATA_06','SPM_STS_DATA_07')
 and  to_char(tgl_spp,'mm')< to_char(sysdate, 'mm')  and to_char(tgl_spp,'dd')<=25) or (sts_data in ('SPM_STS_DATA_01','SPM_STS_DATA_02','SPM_STS_DATA_04','SPM_STS_DATA_05','SPM_STS_DATA_06','SPM_STS_DATA_07') and (to_char(tgl_spp,'mm')= to_char(sysdate, 'mm') and to_char(tgl_spp,'dd')<=to_char(sysdate-7, 'dd') and to_char(tgl_spp,'dd')>7))) and deleted='0') a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_MASTER_REFERENSI where substr(kode,1,7)='SPM_STS') b on a. sts_data=b.kode) c left join   
(select kode, deskripsi from SAKTI_APP.ADM_R_JENIS_SPP) d on c.kd_jns_spp=d.kode) e left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) f on e.kd_satker=f.kode order by e.created_date desc" );

oci_execute($sql);

echo "
<table width='1470' border='1' align='center'>
   <caption><div align='center'>SPP LEBIH DARI 5 HARI TERTUNDA </div></caption> 
<tbody>
    <tr>
    <th><strong>No. </strong></td><th>Kode Satker</th><th>Nama Satker</th><th>Jenis Tagihan</th><th>Uraian</th><th>Nilai</th><th>Tanggal SPP</th><th>Stage</th></tr>
";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$NILAI=number_format($row1["NILAI_RUPIAH"],0,",",".");
$TAGIHAN=substr($row1["JENIS_TAGIHAN"], 0,20);
$SATKER=substr($row1["NAMA_SATKER"], 0,80);
$URAIAN=substr($row1["URAIAN"], 0,60);
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>
    <td>". $row1["KD_SATKER"] ."</td>
    <td width='580px'>". $SATKER ."</td>
    <td width='20px'>". $TAGIHAN . "</td>
    <td>". $URAIAN . "</td>
    <td align='right'>". $NILAI . ",-</td>
    <td width='120px'>". $row1["TGL_SPP"] . "</td>
    <td width='120px'>". $row1["STAGE"] . "</td>
  </tr>
 ";
  $no++; 
}
echo "</tbody>
</table>
</div>
</div>
";
oci_free_statement($sql);
oci_close($conn);
?>