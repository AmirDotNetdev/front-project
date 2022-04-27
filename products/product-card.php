 <article class="card outlined">
    <img class="card-img-top" src = '<?php echo $product['imagesrc']; ?>'>
    <div class="card-body">
        <h3 class="card-title">
            <a href="product-details.php?id=<?php echo $product['id']; ?>">
            <?php echo $product['name']; ?>
            </a>
        </h3>
        <p>قیمت: <?php echo $product['price']; ?> تومان</p>
            <div style="text-align:left;">
                <a href="" class="btn btn-primary"></a>
            </div>
        </div>
    </article>
    </div>
 </article>