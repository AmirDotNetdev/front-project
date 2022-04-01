<?php
include ('lib/db.php');
include ('setting/setting.php');
$txtName = $_POST['name'];
$txtTitle = $_POST['title'];
$txtDescription = $_POST['Description'];
//connect to db
$dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
//Insert query
$sql = "INSERT INTO `message` ( `name`, `title`, `description`) VALUES ( ?, ?, ?)";
//exequte query
$result=$dbc -> query($sql,$txtName,$txtTitle,$txtDescription);
//close con
$dbc -> close();


if($result){
    echo"با موفقیت انجام شد";
}
else{
    echo"خطا";
}
?>