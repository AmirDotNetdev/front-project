<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافه کردن محصول</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="display1">
    <form action="../../../controller/addproduct_controller.php" method="post">
    <div>
            <label for="name">نام محصول</label>
            <input type="text" class="name" id="name"/>
    </div>
    <div>
        <label for="genre">ژانر</label>
        <input class="genre" id="genre" type="text"/>
    </div>
    <div>
        <label for="Pages">تعداد صفحات</label>
        <input class="pages" id="pages" type="number"/>
    </div>
    <div>
        <label for="year">سال چاپ</label>
        <input type="text" class="year" id="year"/>
    </div>
    <div>
        <input class="" type="submit" value="ذخیره"/>
    </div>

    </form>
</body>
</html>