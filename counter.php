<?php
$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");
$perintah_sql="SELECT * FROM pengunjung";
$result=mysqli_query($koneksi,$perintah_sql);
$count=mysqli_num_rows($result);

?>