<?php
include ("setting/setting.php");
include ("lib/db.php");

if(isset($_POST['submit'])){
    $dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
    $id = $_GET['id'];
    if($_POST['Password']==''){
        $sql="UPDATE user SET 
        FullName=?,
        UserName=?,
        Email=?,
        WHERE id=?";
        $result=$dbc -> query($sql,$_POST['FullName'],$_POST['UserName'],$_POST['Email'],$_GET['id']);
    }
    else{
        $sql="UPDATE user SET 
        FullName=?,
        UserName=?,
        Email=?,
        Password=?
        WHERE id=?";
        $result=$dbc -> query($sql,$_POST['FullName'],$_POST['UserName'],$_POST['Email'],$_POST['Password'],$_GET['id']);

    }
    $dbc -> close();
    echo 'با موفقیت ویرایش شد';

}else{
    $dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
    $sql = "SELECT * FROM user
            WHERE id = ?";
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();
    $dbc -> close();
    include '../view/Assest/Css/Editusr.php';
}
?>