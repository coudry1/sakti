
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='tes.php?q=' + val;
}
</script>

<?php if (isset($_GET['q'])) $kdsatker= $_GET['q'];	?>
<div align='center'>
<form action="?p=fa" method="post">
<select name="fa" id="fa" onChange="reload(this.form)">
<option value="" >-- PILIH --</option>
<option value="1" >-- KWITANSI TIDAK WAJAR --</option>
<option value="2" >-- KONTRAKTUAL TIDAK WAJAR --</option>
<option value="3" >-- NON KONTRAKTUAL TIDAK WAJAR --</option>
  </select></div>
<br><br>
<?php echo $kdsatker;?>