<?php
include ("setting/setting.php");
include ("lib/db.php");

if(isset($_POST['submit'])){
    $dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
    $id = $_GET['id'];
  
        $sql="UPDATE product SET 
        productname=?,
        genre=?,
        pages=?,
        years=?
        WHERE id=?";
        $result=$dbc -> query($sql,$_POST['name'],$_POST['genre'],$_POST['pages'],$_POST['year'],$_GET['id']);

    }
    $dbc -> close();
    echo 'با موفقیت ویرایش شد';

}else{
    $dbc=new DB($host,$dbusr,$dbpsw,$dbname,$dbcharset);
    $sql = "SELECT * FROM product
            WHERE id = ?";
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();
    $dbc -> close();