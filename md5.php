<script type="text/javascript" src="ajax_pesan.js">     </script>
<script type="text/javascript">  show();  form();  </script>
<form id="bukutamu" name="bukutamu" method="post" action="">

 <TABLE align="left" width="100%">
<TR>
<TD align="left" width="121"><?php
include "connect.php";
$query = mysql_query("SELECT * FROM bukutamu where email='coudry1@gmail.com' ORDER BY id asc");
while($array = mysql_fetch_array($query))
{
$nama = $array['nama'];
$email = $array['email'];
$pesan = $array['pesan'];
$tanggal = $array['tanggal'];
$id = $array['id'];

echo "<strong>$nama</strong><br />";
if(!empty($email))
{

}
echo "<small style=\"color:#333\">$tanggal</small><br />";
echo "$pesan";
echo "<hr/>";
}
?></TD>

</TR>
</TABLE>

<TABLE width="100%" align="center">

<TD align="left" width="121">

 <div align="left" id="input"></div>
 
</TD>
</br>
<TABLE width="100%" align="center">
<tr>
<td width="62">Nama</td>
<td width="8">:</td>
<td align="left" width="410"><input type="text" name="nama" id="nama" /></td>
</tr>
<tr>

<td><input type="hidden" name="email" id="email" value="coudry1@gmail.com" /></td>
</tr>
<tr>
<td>Pesan</td>
<td>:</td>
<td align="left" ><textarea name="pesan" id="pesan" cols="45" rows="5"></textarea></td>
</tr>
</table>
</form>
<br/>
<table width="100%"  border="0">
  <tr>
    <th width="26%" scope="col"></th>
    <th width="12%" scope="col">
<fieldset id="inputs0">
        <input type="submit" align="center" name="cari" id="cari" value="Catat" onClick="save();" />
    </fieldset></form>