<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

if (!isset($_GET['id'])) {
    die("Product not found.");
}

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='img/$o'>";
});

// print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Item</title>
    
    <?php include "parts/meta.php"; ?>

    <script src="js/product_thumbs.js"></script>
</head>
<body>

    <?php include "parts/navbar.php"; ?>
    
    <div class="container">
        

<div class="grid gap">

    <!-- Left: Product Images -->
    <div class="col-xs-12 col-md-8">
        <div class="card soft">
            <div class="images-main">
                <img src="img/<?= $product->thumbnail ?>">
            </div>
        </div>

        <div class="images-thumbs">
            <?= $image_elements ?>
        </div>
    </div>

    <!-- Right: Product Information -->
    <div class="col-xs-12 col-md-4">
        <div class="card soft flat">
            <div class="card-section">
                <h2 class="product-title"><?= $product->name ?></h2>
                <div class="product-price">&dollar;<?= $product->price ?></div>
            </div>

        <div class="card-section">
            <label for="product-amount" class="form-label">Amount</label>
            <div class="form-select" id="product-amount">
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
        </div>

        <div class="card-section">
            <a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add to Cart</a>
        </div>
        </div>
    </div>

</div>

<!-- Product Description -->
<div class="card soft dark">
    <p><?= $product->description ?></p>
</div>

</div>

</body>
</html>
