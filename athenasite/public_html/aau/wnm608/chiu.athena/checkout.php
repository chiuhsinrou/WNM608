<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HYGGE - Checkout</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Checkout</h2>
			<form action="confirmation.php" method="get">
				<p>Enter your shipping & payment details.</p>
				<button type="submit" class="form-button primary">Place Order</button>
			</form>
	
					<p><a href="cart.php">Back to Cart</a></p>

			</div>
	</div>
			
</body>
</html>