<?php 
include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$sql  = oci_parse($conn, "select a.userid,  a.kdsatker, b.deskripsi, a.remote_address, a.accessed_time from(
select userid, substr(userid, -25, 6) kdsatker, remote_address, accessed_time  from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN where lower(substr(userid,0,50)) not like '%sakti%' and lower(substr(userid,0,50)) not like '%checker%' ) a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kdsatker=b.kode order by accessed_time desc");

oci_execute($sql);
echo "
<table width='1470' border='1' height='20px'>

   <caption><div align='center'> USER LOGIN </div></caption> 
<thead height='20px'>	  
  <tr>
    <th class='head0' height='20px'>USERID </td>
    <th class='head1' >NAMA SATKER </td>
    <th class='head0'  >ACCESS TIME </td>
    <th class='head1' >REMOTE ADDRESS </td>
  </tr>
 </thead>
 ";

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr height='20px'>
    <td height='20px'>". $row1["USERID"] ."</td>
    <td>". $row1["DESKRIPSI"] . "</td>
    <td>". $row1["ACCESSED_TIME"] . "</td>
    <td>". $row1["REMOTE_ADDRESS"]."</td>
  </tr>
 ";
}
echo "</table>
";
oci_free_statement($sql);
oci_close($conn);
?>