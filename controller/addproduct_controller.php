<?php
include ('lib/db.php');
include ('setting/setting.php');

$dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
$sql = "INSERT INTO `product` ( `productname`, `genre`, `pages`,`years`) VALUES ( ?, ?, ?,?)";
$result=$dbc -> query($sql,$_POST['name'],$_POST['genre'],$_POST['pages'],$_POST['year']);
var_dump();
$dbc -> close();
if($result){
    echo"با موفقیت انجام شد";
}
else{
    echo"خطا";
}
?>
$_POST['name'],$_POST['genre'],$_POST['pages'],$_POST['year']