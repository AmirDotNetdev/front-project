<?php
include ("setting/setting.php");
include ("lib/db.php");
$dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
$sql = "SELECT * FROM user
ORDER BY id DESC
LIMIT 15";
$result = $dbc -> query( $sql );
$users = $dbc -> fetchAll();
$dbc -> close();

?>