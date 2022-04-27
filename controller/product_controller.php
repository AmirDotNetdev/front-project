<?php
include ("setting/setting.php");
include ("lib/db.php");
$dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
$sql = "SELECT * FROM product
ORDER BY id DESC
LIMIT 15";
$result = $dbc -> query( $sql );
$products = $dbc -> fetchAll();
$dbc -> close();
include '../show-product.php'
?>