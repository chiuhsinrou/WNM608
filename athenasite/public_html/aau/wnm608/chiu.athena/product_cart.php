<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HYGGE - Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
		<h2>In Your Cart</h2>
			<div class="grid gap">
				<div class="col-xs-12 col-md-8">
					<div class="card soft">
						<?= array_reduce($cart,'cartListTemplate') ?>
					</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Sub Total</strong></div>
							<div class="flex-none">&dollar;3047.95</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Taxes</strong></div>
							<div class="flex-none">&dollar;304.80</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Total</strong></div>
							<div class="flex-none">&dollar;3352.75</div>
						</div>

				
				<div class="form-control">
					<a href="product_checkout.php" class="form-button">Checkout</a>
					<p><a href="product_list.php">Continue Shopping</a></p>
				</div>
			</div>
		</div>

</body>
</html>