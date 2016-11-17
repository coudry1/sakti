<?php 
include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$sql  = oci_parse($conn, "select a.kdsatker, b.deskripsi from(
select substr(userid, -25, 6) kdsatker from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN where lower(substr(userid,1,5)) not like '%sakti%' ) a left join(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kdsatker=b.kode group by a.kdsatker, b.deskripsi");

oci_execute($sql);
echo "
<table width='1470' border='1' height='20px'>

   <caption><div align='center'> SATKER LOGIN </div></caption> 
<thead height='20px'>	  
  <tr>
    <th class='head1' >KDSATKER </td>
    <th class='head0'  >NAMA SATKER </td>
  </tr>
 </thead>
 ";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr height='20px'>
    <td>". $row1["KDSATKER"] . "</td>
    <td>". $row1["DESKRIPSI"] . "</td>
  </tr>
 ";
}
echo "</table>
";
oci_free_statement($sql);
oci_close($conn);
?>