<?php
include "koneksi.php";
//user login
$sql  = oci_parse($conn, "select count(*) as USER_LOGIN from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN");
oci_define_by_name($sql,'USER_LOGIN',$user_login);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "select count (*) as SATKER_LOGIN from (select distinct substr(userid, -25, 6) kdsatker  from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN)");
oci_define_by_name($sql,'SATKER_LOGIN',$satker_login);
oci_execute($sql);
oci_fetch($sql);

// peran pengguna
$sql  = oci_parse($conn, "select count(*) OPERATOR from (
select a.userid, b.peran from (
select userid from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN) a inner join
(select distinct userid, peran from SAKTI_APP.ADM_R_SEC_USER where peran='ROLE_OPERATOR') b on a.userid=b.userid)");
oci_define_by_name($sql,'OPERATOR',$operator);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "select count(*) VALIDATOR from (
select a.userid, b.peran from (
select userid from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN) a inner join
(select distinct userid, peran from SAKTI_APP.ADM_R_SEC_USER where peran='ROLE_VALIDATOR') b on a.userid=b.userid)");
oci_define_by_name($sql,'VALIDATOR',$validator);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "select count(*) ADMIN from (
select a.userid, b.peran from (
select userid from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN) a inner join
(select distinct userid, peran from SAKTI_APP.ADM_R_SEC_USER where peran='ROLE_ADMIN') b on a.userid=b.userid)");
oci_define_by_name($sql,'ADMIN',$admin);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "select count(*) APPROVER from (
select a.userid, b.peran from (
select userid from SAKTI_APP.ADM_R_SEC_SESSION_LOGIN) a inner join
(select distinct userid, peran from SAKTI_APP.ADM_R_SEC_USER where peran='ROLE_APPROVER') b on a.userid=b.userid)");
oci_define_by_name($sql,'APPROVER',$approver);
oci_execute($sql);
oci_fetch($sql);

//spp tunda
$sql  = oci_parse($conn, "SELECT  count(*) as SPP_LEWAT FROM SAKTI_APP.SPM_T_SPP where trim(kd_jns_spp)!= '611'  and ((sts_data in ('SPM_STS_DATA_01','SPM_STS_DATA_02','SPM_STS_DATA_04','SPM_STS_DATA_05','SPM_STS_DATA_06','SPM_STS_DATA_07')
 and  to_char(tgl_spp,'mm')< to_char(sysdate, 'mm')  and to_char(tgl_spp,'dd')<=25) or (sts_data in ('SPM_STS_DATA_01','SPM_STS_DATA_02','SPM_STS_DATA_04','SPM_STS_DATA_05','SPM_STS_DATA_06','SPM_STS_DATA_07') and (to_char(tgl_spp,'mm')= to_char(sysdate, 'mm') and to_char(tgl_spp,'dd')<=to_char(sysdate-7, 'dd') and to_char(tgl_spp,'dd')>7))) and deleted='0'");
oci_define_by_name($sql,'SPP_LEWAT',$spp_lewat);
oci_execute($sql);
oci_fetch($sql);

//spp spm
$sql  = oci_parse($conn, "SELECT  count(*) as SPP_BARU FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_01' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'SPP_BARU',$spp_baru);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as SETUJU_SPP FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_04' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'SETUJU_SPP',$setuju_spp);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as ADK_SPP FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_05' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'ADK_SPP',$adk_spp);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as UPLOAD_SPP FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_07' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'UPLOAD_SPP',$upload_spp);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as CETAK_SPM FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_08' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'CETAK_SPM',$cetak_spm);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as SETUJU_SPM FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_10' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'SETUJU_SPM',$setuju_spm);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as ADK_SPM FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_11' and 
to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'ADK_SPM',$adk_spm);
oci_execute($sql);
oci_fetch($sql);
$sql  = oci_parse($conn, "SELECT  count(*) as UPLOAD_SP2D FROM SAKTI_APP.SPM_T_SPP WHERE sts_data='SPM_STS_DATA_13' and  to_char(modified_date, 'yyyy-mm-dd') = to_char(sysdate, 'yyyy-mm-dd')");
oci_define_by_name($sql,'UPLOAD_SP2D',$upload_sp2d);
oci_execute($sql);
oci_fetch($sql);

oci_free_statement($sql);
oci_close($conn);

?>