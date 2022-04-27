<?php
include ("Class/Security.php");
include ("setting/setting.php");
include ("lib/db.php");
if(isset($_POST['submit'])){
    $dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
    $sql = "SELECT * FROM user
    WHERE Email = ? AND password = ?";
     $result = $dbc -> query( $sql, $_POST['Email'], $_POST['Password'] );
     if ($dbc -> numRows() > 0){
        echo 'ورود با موفقیت';
        $user = $dbc -> fetchArray();
        $uid = $user['id'];
        Authentication :: login( $uid );
    }
    else{
        echo 'نام کاربری/کلمه عبور اشتباه است';
        include '../view/Assest/Css/Login_view.php';
    }
    $dbc -> close();
}
else{
    // نمایش فرم
    include '../view/Assest/Css/Login_view.php';
}
?>
