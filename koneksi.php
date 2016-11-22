<?php
<<<<<<< HEAD
$DB_USER = 'sakti_r';
$DB_PASS = 'sakti234';
$DB_NAME = '//10.100.91.171:1521/SAKTI.DEPKEU.GO.ID';
$ORACLE_HOME = 'G:\app\user\product\11.2.0\client_1';
//$ORACLE_HOME = 'C:\oraclexe\app\oracle\product\11.2.0\server';
=======
$DB_USER = '';
$DB_PASS = '';
$DB_NAME = '';
$ORACLE_HOME = 'C:\app\user\product\11.2.0\client_1';
>>>>>>> 780df372a233f786bf4748bcd5894adfcdbad6de
putenv('ORACLE_SID='.$DB_NAME);
putenv('ORACLE_HOME='.$ORACLE_HOME);

$conn = oci_connect($DB_USER, $DB_PASS, $DB_NAME);
?>
