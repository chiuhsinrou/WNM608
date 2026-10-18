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
		<h2>Your Cart</h2>
					<h3>Pillow</h3>
					<p>Color: Cream</p>
					<p>Quantity: 1</p>
					<p>Price: $49.95</p>
					<p><a href="product_list.php">Continue Shopping</a></p>
			

				<?php include "parts/order_summary.php"; ?>
				<div class="form-control">
					<a href="checkout.php" class="form-button">Checkout</a>
				</div>
			</div>
		</div>

</body>
</html>