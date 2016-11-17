<?php
include "koneksi.php";

$sql  = oci_parse($conn, "select * from (select c.kode_satker, c.kas_bank, c.kas_tunai, d.deskripsi from (
select a.kode_satker,b.kas_bank,  a.kas_tunai from (
select kode_satker, sum(jumlah) kas_tunai from SAKTI_APP.BEN_T_KAS_TUNAI_BEN_PENG where deleted='0'  group by kode_satker ) a left join
(select kode_satker, sum(jumlah) kas_bank from SAKTI_APP.BEN_T_KAS_BANK_BEN_PENG where deleted='0' group by kode_satker) b on a.kode_satker=b.kode_satker) c left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) d on c.kode_satker=d.kode order by kas_tunai desc) where rownum <= 10");

oci_execute($sql);

while (($row = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices

 echo     " {Kdsatker:'[". $row["KODE_SATKER"] ."]', Kas_bank:  ". $row["KAS_BANK"] . ", Kas_tunai: ". $row["KAS_TUNAI"] . " },";
}

oci_free_statement($sql);
oci_close($conn);

?>
