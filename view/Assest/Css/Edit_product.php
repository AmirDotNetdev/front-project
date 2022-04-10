<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش محصول</title>
</head>
<body>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="display1">
    <form action="../../../controller/editproduct_controller.php" method="post">
    <div>
            <label for="name">نام محصول</label>
            <input type="text" class="name" id="name" value="<?php if(isset($row['produntname'])) echo $row['productname']; ?>"/>
    </div>
    <div>
        <label for="genre">ژانر</label>
        <input class="genre" id="genre" type="text" value="<?php if(isset($row['genre'])) echo $row['genre']; ?>"/>
    </div>
    <div>
        <label for="Pages">تعداد صفحات</label>
        <input class="pages" id="pages" type="number" value="<?php if(isset($row['pages'])) echo $row['pages']; ?>"/>
    </div>
    <div>
        <label for="year">سال چاپ</label>
        <input type="text" class="year" id="year" value="<?php if(isset($row['years'])) echo $row['years']; ?>"/>
    </div>
    <div>
        <input class="submit" id="submit" type="submit" value="ذخیره"/>
    </div>

    </form>
</body>
</html>
</body>
</html>