<?php include 'controller/show-users-controller.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/Assest/Css/style.css">
    <title>محصولات</title>
</head>
<body>
    <h1>محصولات</h1>
    <div class="grid grid-4">
        <table class="datatable">
            <thead>
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>نام کاربری</th>
                <th>رایانامه</th>
                <th>نقش</th>
                <th>اعمال</th>
            </tr>
            </thead>
            <tbody>
    <?php
        if( count( $users ) == 0 ){
            echo '<p>کاربری یافت نشد</p>';
        }
        else{
            foreach( $users as $user ){
                // var_dump($product);               
                include 'template/user-row.php';
            }
        }
    ?>
    </tbody>
    </table>
    </div>
</body>
</html>