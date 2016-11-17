<?php
include "koneksi.php";

$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");

$sql  = oci_parse($conn, "Select i.kd_satker, i.deskripsi, i.SPM_akhir, decode(i.create_date_mat ,null,'0', i.create_date_mat ) create_date_mat, i.TUTUP_MAT, i.create_date_per, i.TUTUP_PER,
decode(j.created_date_glp ,null,'0', j.created_date_glp) create_date_glp,decode(i.tutup_glp ,null,'0', i.tutup_glp ) tutup_glp, 
decode(j.tutup_sementara ,null,'0', j.tutup_sementara ) tutup_sementara, decode(j.tutup_permanen ,null,'0', j.tutup_permanen) tutup_permanen from (
Select g.kd_satker,h.deskripsi, g.SPM_akhir, g.create_date_mat, g.TUTUP_MAT, g.create_date_per, g.TUTUP_PER, g.TUTUP_GLP from (
Select e.kd_satker, e.SPM_akhir, e.create_date_mat, e.TUTUP_MAT, e.create_date_per, e.TUTUP_PER, f.TUTUP_GLP from (
Select c.kd_satker, c.SPM_akhir, c.create_date_mat, c.TUTUP_MAT, d.create_date_per, d.TUTUP_PER from (
Select a.kd_satker, a.SPM_akhir, b.create_date_mat, decode(b.kode_sdata, 'AST',b.tutup_mat,'0') TUTUP_MAT from (
SELECT KD_SATKER,  MAX(TGL_SPM) SPM_Akhir FROM SAKTI_APP.SPM_T_SPP where deleted='0' GROUP BY KD_SATKER) a left join 
(select kode_satker, to_char(max(created_date), 'dd-mm-yyyy') create_date_mat, max(kode_periode) tutup_mat, kode_sdata from sakti_app.GLP_T_TUTUP_BUKU_MODUL 
where deleted='0'  and kode_sdata in ('AST') group by kode_satker, kode_sdata order by kode_satker asc) b on a.kd_satker=b.kode_satker) c left join
(select kode_satker,  to_char(max(created_date), 'dd-mm-yyyy') create_date_per, MAX(decode(kode_sdata, 'PER',kode_periode,'0')) TUTUP_PER from sakti_app.GLP_T_TUTUP_BUKU_MODUL 
where deleted='0'  and kode_sdata in ('PER') group by kode_satker) d on c.kd_satker=d.kode_satker) e left join
(select kode_satker, MAX(decode(kode_sdata, 'GLP',kode_periode,'0')) TUTUP_GLP from sakti_app.GLP_T_TUTUP_BUKU_MODUL 
where deleted='0'  and kode_sdata in ('GLP') group by kode_satker, kode_sdata) f on e.kd_satker=f.kode_satker) g left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) h on g.kd_satker=h.kode) i left join
(select kode_satker, to_char(max(created_date_glp),'dd-mm-yyy') created_date_glp, max(tutup_sementara) tutup_sementara, max(tutup_permanen) tutup_permanen from (
select kode_satker, decode(modified_date, null, created_date, modified_date) created_date_glp, decode(status, '1', kode_periode,'0') tutup_sementara, decode(status, '2', kode_periode,'0') tutup_permanen from sakti_app.GLP_T_STATUS_TUTUP_BUKU) 
group by kode_satker) j on i.kd_satker = j.kode_satker");
oci_execute($sql);

while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {$query2="INSERT INTO mon_penggunaan_sakti (id, userid, nmsatker,accestime,remoteaddress) VALUES ('','".$row1['USERID']."', '".$row1['DESKRIPSI']."', '".$row1['ACCESSED_TIME']."', '".$row1['REMOTE_ADDRESS']."') ";
mysqli_query($koneksi,$query2);
}

oci_free_statement($sql);
oci_close($conn);

$koneksi = mysqli_connect("localhost","root","","sakti") or die("tidak bisa tersambung ke database");
$perintah_sql = "DELETE n1 FROM userlogin n1, userlogin n2 WHERE n1.id < n2.id AND n1.userid = n2.userid AND n1.nmsatker = n2.nmsatker AND n1.remoteaddress = n2.remoteaddress";
$result = mysqli_query($koneksi,$perintah_sql);
?>
