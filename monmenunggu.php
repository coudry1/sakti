
<?php 
include "koneksi3.php";

$sql  = oci_parse($conn, "select a.kppn_kd, a.downloaded, b.nama_kppn, a.nama_file_sakti, a.tanggal_upload from (
select kppn_kd, downloaded, nama_file_sakti, tanggal_upload FROM POC_T_ADK 
WHERE TO_CHAR(TANGGAL_UPLOAD, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD')) a left join
(select distinct kode_kppn, nama_kppn from POC_R_KPPN) b on a.kppn_kd=b.kode_kppn where downloaded is null" );

oci_execute($sql);

echo "
<table width='1470' border='1' align='center'>
   <caption><div align='center'> Menunggu </div></caption> 
<tbody>
    <tr><th>Kode KPPN</th><th>Nama KPPN</th><th>Nama File</th><th>Waktu</th></tr>";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr class='gradeX'>
    <td>". $row1["KPPN_KD"] . "</td>
    <td>". $row1["NAMA_KPPN"] . "</td>
    <td>". $row1["NAMA_FILE_SAKTI"] . "</td>
    <td>". $row1["TANGGAL_UPLOAD"] . "</td>
  </tr>
 ";
}
echo "</tbody>
</table>
</div>
</div>
";
oci_free_statement($sql);
oci_close($conn);
?>