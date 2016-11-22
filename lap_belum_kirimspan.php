<?php error_reporting(0); ?>
<link href="css/table_white.css" rel="stylesheet">	
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.fa.options[form.fa.options.selectedIndex].value;
self.location='?&q=' + val;
}
</script>
<script>function Print() {
document.body.offsetHeight;
window.print();
}
</script>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form name="form2" method="post" onSubmit="Print()" action="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Submit2" type="submit" class="button" value="PRINT">

<?php 
error_reporting(0);
include "koneksi2.php";
$today = gmdate("d-m-y", time()+60*60*8); 
if (isset($_GET['q'])) $nmsatker= $_GET['q'];

$sql  = oci_parse($conn, "select * from (
select distinct c.kd_satker, c.nm_satker, d.namafilesakti from (
select distinct kd_satker, nm_satker from span_portletlv.POR_R_SATKEROFFICE where kd_satker in ('409999','539032','527851','528718','528722','528739','528413','451604','528696','528792','634608','445371','528785','613750','452878','528497','662787','527162','634260','648783','634633','527982','527954','634256','497622','528281','662770','528640','528661','528654','528629','528633','528701','539049','528743','528764','528750','613832','528682','528235','635197','528298','528260','528277','497607','528331','528345','528324','528310','648741','613807','528420','648851','497593','528391','635120','451578','528366','528370','528387','528409','635155','635162','528441','613792','528455','652460','528502','528519','528476','528480','528565','635045','528544','528551','648847','528608','528586','613785','528590','652453','527741','527666','527691','527713','527670','527823','634409','527802','527797','527819','527776','527780','527865','527844','613739','527872','634497','527912','527908','648762','527890','613743','648779','527975','634530','527933','527940','527961','528022','634572','528001','528015','528036','648893','528078','528104','528082','528057','528061','528099','528146','648868','528150','528125','613764','648872','528200','634963','528192','528171','528188','634984','634991','528221','613771','439165','439171','527010','527031','527048','531293','648790','527205','634661','451531','527094','527102','527137','527230','527120','652449','527141','648812','527322','527336','527301','527361','648826','527293','634722','648805','451547','527268','527272','527315','527357','527340','527289','634792','497587','527399','634277','648830','527471','527467','527492','527521','527514','527488','648889','451553','527411','527425','527500','527432','634860','527446','527450','527603','527624','527577','527598','527610','527556','527560','527581','527709','527687','527755','451562','527645','527652','527734','528242','613811','579330','527027','527052','527183','527158','015115','015116','330171','666669','015117','325237','340249','015114','451584')
) c left join 
(
select nm_satker, namafilesakti from (
select b.nm_satker, max(a.namafilesakti) namafilesakti from (
select satkeroffice_id, namafilesakti from  span_portletlv.POR_T_ADK where STATUSADK_ID='2' AND deleted IS NULL) a left join
(select distinct id, nm_satker from span_portletlv.POR_R_SATKEROFFICE) b on a.satkeroffice_id=b.id group by  b.nm_satker
  ) ) d on c.nm_satker=d.nm_satker group by  c.kd_satker, c.nm_satker, d.namafilesakti ) where namafilesakti is null" );

oci_execute($sql);



echo "
<table height='50px' width='1100px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='3' align='center'>&nbsp;</td></tr>
<tr><td colspan='3' align='left'></td></tr>
<tr><td colspan='3' align='center'><strong>BELUM MELAKUKAN PENGIRIMAN/UPLOAD ADK SAKTI KE PORTAL SPAN</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='3' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table  width='1103px' align='center' border='1'>
<tbody>
    <tr><th align='center'><strong>No. </strong></th><th>Kode Satker</th><th>Nama Satker</th></tr>";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
 echo     "
  <tr class='gradeX'>
    <td>$no.</td>  
    <td align='center' >". $row1["KD_SATKER"] . "</td> 
    <td>". $row1["NM_SATKER"] . "</td>
  </tr>
 ";
    $no++; 
}
echo "</tbody>
</table>
</div>
</div>
";

oci_free_statement($sql);
oci_close($conn);
?>