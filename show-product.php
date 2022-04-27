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
    <?php
        if( count( $products ) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $products as $product ){
                // var_dump($product);               
                include 'products/product-card.php';
            }
        }
    ?>
    </div>
</body>
</html>