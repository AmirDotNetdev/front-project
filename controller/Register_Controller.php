<?php
include ("setting/setting.php");
include ("lib/db.php");
$dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
$fullName = $_POST['FullName'];
$userName = $_POST['UserName'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$sql = "INSERT INTO `user` (`FullName`, `UserName`, `Email`, `Password`) VALUES (?, ?, ?, ?)";
$result=$dbc -> query($sql,$fullName,$userName,$email,$password);
$dbc -> close();

    include ("../view/Assest/Css/Register.php");
    if($result){
    echo("با موفقیت ثبت نام شد");

}else{
    include ("../view/Assest/Css/Register.php");
    echo("با خطا مواجه شد");
}

?>