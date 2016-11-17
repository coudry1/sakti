
<?php 
include "koneksi2.php";

$sql  = oci_parse($conn, "select b.nm_satker, a.tgluploadsakti, a.email_user, a.namafilesakti from (
select  satkeroffice_id, tgluploadsakti, createby email_user, namafilesakti from  POR_T_ADK where STATUSADK_ID='1' and 
TO_CHAR(tgluploadsakti, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD') AND deleted IS NULL) a left join
(select distinct id, nm_satker from POR_R_SATKEROFFICE) b on a.satkeroffice_id=b.id" );

oci_execute($sql);

echo "
<table width='1470' border='1' align='center'>
   <caption><div align='center'> Upload ADK </div></caption> 
<tbody>
    <tr><th>Nama Satker</th><th>Tanggal Upload</th><th>Email Pengguna</th><th>Nama File</th></tr>";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr class='gradeX'>
    <td>". $row1["NM_SATKER"] . "</td>
    <td>". $row1["TGLUPLOADSAKTI"] . "</td>
    <td>". $row1["EMAIL_USER"] . "</td>
    <td>". $row1["NAMAFILESAKTI"] . "</td>
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