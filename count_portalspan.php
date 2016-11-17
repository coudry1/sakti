<?php
include "koneksi2.php";

$sql  = oci_parse($conn, "select count(*) upload from  POR_T_ADK where STATUSADK_ID='1' and TO_CHAR(tgluploadsakti, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD') AND deleted IS NULL");
oci_define_by_name($sql,'UPLOAD',$upload);
oci_execute($sql);
oci_fetch($sql);

$sql  = oci_parse($conn, "select count(*) kirim_span from  POR_T_ADK where STATUSADK_ID='2' and TO_CHAR(tgluploadsakti, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD') AND deleted IS NULL");
oci_define_by_name($sql,'KIRIM_SPAN',$kirim_span);
oci_execute($sql);
oci_fetch($sql);

$sql  = oci_parse($conn, "select count(*) selesai from  POR_T_ADK where STATUSADK_ID='5' and TO_CHAR(tgluploadsakti, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD') AND deleted IS NULL");
oci_define_by_name($sql,'SELESAI',$selesai);
oci_execute($sql);
oci_fetch($sql);

$sql  = oci_parse($conn, "select count(*) ditolak from  POR_T_ADK where STATUSADK_ID='4' and TO_CHAR(tgluploadsakti, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD') AND deleted IS NULL");
oci_define_by_name($sql,'DITOLAK',$ditolak);
oci_execute($sql);
oci_fetch($sql);

oci_free_statement($sql);
oci_close($conn);

?>