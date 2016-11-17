<?php	
$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");
$perintah_sql = "select distinct userid, nmsatker, accestime, remoteaddress from userlogin where substr(accestime,1,5)=DATE_FORMAT(SYSDATE(), '%d-%m') and substr(accestime,12,2)>=DATE_FORMAT(SYSDATE(), '%H')-1";
$result = mysqli_query($koneksi,$perintah_sql);

echo "<table width='1470' border='1' height='20px'>";
echo "   <caption><div align='center'> USER LOGIN 6 JAM TERAKHIR</div></caption> 
<thead height='20px'>	  
  <tr>
    <th class='head0' height='20px'>USERID </td>
    <th class='head1' >NAMA SATKER </td>
    <th class='head0'  >ACCESS TIME </td>
    <th class='head1' >REMOTE ADDRESS </td>
  </tr>
 </thead>";

$i = 0;
while($data = mysqli_fetch_array($result))
{
  echo "<tr><td>".$data['userid']."</td><td>".$data['nmsatker']."</td><td>".$data['accestime']."</td><td>".$data['remoteaddress']."</td></p></tr>";
  $i++;
}

echo "</table>";
?>
</body>