<?php
include "koneksi3.php";

$sql  = oci_parse($conn, "SELECT COUNT(downloaded) downloaded FROM POC_T_ADK WHERE TO_CHAR(TANGGAL_UPLOAD, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD')");
oci_define_by_name($sql,'DOWNLOADED',$downloaded);
oci_execute($sql);
oci_fetch($sql);

$sql  = oci_parse($conn, "SELECT (COUNT(*) - COUNT(downloaded)) not_downloaded_yet FROM POC_T_ADK WHERE TO_CHAR(TANGGAL_UPLOAD, 'YYYY-MON-DD') =  TO_CHAR (SYSTIMESTAMP, 'YYYY-MON-DD')");
oci_define_by_name($sql,'NOT_DOWNLOADED_YET',$not_downloaded_yet);
oci_execute($sql);
oci_fetch($sql);

oci_free_statement($sql);
oci_close($conn);

?>