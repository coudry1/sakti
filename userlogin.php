<meta http-equiv="Refresh" content="900; URL=userlogin.php">
<?php error_reporting(0); ?>
<?php
include "koneksi.php";
$today = gmdate("d-m-y H:i:s", time()+60*60*7);
echo $today;

$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");

$sql  = oci_parse($conn, "select a.userid,  a.kdsatker, b.deskripsi, a.remote_address, a.accessed_time from(
select userid, substr(userid, -25, 6) kdsatker, remote_address, accessed_time  from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN where lower(substr(userid,0,50)) not like '%sakti%' and lower(substr(userid,0,50)) not like '%checker%' ) a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kdsatker=b.kode order by accessed_time desc");
oci_execute($sql);

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {$query2="INSERT INTO userlogin (id, userid, nmsatker,accestime,remoteaddress,tanggaljam) VALUES ('','".$row1['USERID']."', '".$row1['DESKRIPSI']."', '".$row1['ACCESSED_TIME']."', '".$row1['REMOTE_ADDRESS']."', '".$today."') ";
mysqli_query($koneksi,$query2);
}

oci_free_statement($sql);
oci_close($conn);

$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");
$perintah_sql = "DELETE n1 FROM userlogin n1, userlogin n2 WHERE n1.id < n2.id AND n1.userid = n2.userid AND n1.nmsatker = n2.nmsatker AND n1.remoteaddress = n2.remoteaddress";
$result = mysqli_query($koneksi,$perintah_sql);
?>
