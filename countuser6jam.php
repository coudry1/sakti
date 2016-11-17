<?php
$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");
$perintah_sql = "select distinct count(*) jumlah, userid, nmsatker, accestime, remoteaddress from userlogin where substr(accestime,1,5)=DATE_FORMAT(SYSDATE(), '%d-%m') and substr(accestime,12,2)>=DATE_FORMAT(SYSDATE(), '%H')-1";
$result = mysqli_query($koneksi,$perintah_sql);
$data = mysqli_fetch_array($result);
echo $data['jumlah'];
?>
