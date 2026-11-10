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
			
				<div class="checkout" id="checkout">

	<p>1. Shipping → 2. Payment → 3. Confirmation</p>
	<div class="grid gap">
		<div class="col-xs-12 col-md-8"><div class="card soft">
			<h2>Shipping</h2>
			<form action="#payment" method="get">
				<div class="grid gap">
				<div class="col-xs-12 col-md-6"><div class="form-control">
					<label class="form-label" for="first-name">First Name</label>
					<input type="text" id="first-name" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-6"><div class="form-control">
					<label class="form-label" for="last-name">Last Name</label>
					<input type="text" id="last-name" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-12"><div class="form-control">
					<label class="form-label" for="email">Email</label>
					<input type="email" id="email" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-12"><div class="form-control">
					<label class="form-label" for="address">Street Address</label>
					<input type="text" id="address" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-12"><div class="form-control">
					<label class="form-label" for="apartment">Apartment / Suite (optional)</label>
					<input type="text" id="apartment" class="form-input">
				</div></div>
				<div class="col-xs-12 col-md-6"><div class="form-control">
					<label class="form-label" for="zip">ZIP Code</label>
					<input type="text" id="zip" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-6"><div class="form-control">
					<label class="form-label" for="city">City</label>
					<input type="text" id="city" class="form-input" required>
				</div></div>
				<div class="col-xs-12"><div class="form-control">
					<label class="form-label" for="state">State</label>
					<div class="form-select"><select id="state" required>
						<option value="">Please Select</option>
						<option>California</option>
						<option>New York</option>
						<option>Texas</option>
						<option>Washington</option>
						<option>Other</option>
					</select></div>
				</div></div>
				<div class="col-xs-12 col-md-12"><div class="form-control">
					<label class="form-label" for="phone">Phone Number</label>
					<input type="tel" id="phone" class="form-input" required>
				</div></div>
				</div>
				<div class="form-control"><label><input type="checkbox" checked> Use as billing address</label></div>
				<div class="form-control"><button type="submit" class="form-button">Next</button></div>
			</form>
		</div></div>
		<div class="col-xs-12 col-md-4">
			<div class="card soft">
				<h2>Order Summary</h2>
				<p>Pillow × 1 — $49.95</p>
				<table class="table lined horizontal">
					<tbody>
						<tr><td>Subtotal</td><td>$49.95</td></tr>
						<tr><td>Shipping</td><td>$6.00</td></tr>
						<tr><td>Tax</td><td>$4.50</td></tr>
						<tr><th>Order Total</th><td><strong>$60.45</strong></td></tr>
					</tbody>
				</table>
				<p>Sample order for this checkout demo.</p>
				<a href="product_list.php">Back to Shop</a>
			</div>
		</div>
	</div>
	
	</div>

	<div class="checkout" id="payment">

	<div class="grid gap">
		<div class="col-xs-12 col-md-8"><div class="card soft">
			<h2>Payment</h2>
			<p>Demo only. Use made-up payment details.</p>
			<form action="product_confirmation.php" method="get">
				<div class="grid gap">
				<div class="col-xs-12 col-md-12"><div class="form-control">
					<label class="form-label" for="card-name">Name on Card</label>
					<input type="text" id="card-name" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-12"><div class="form-control">
					<label class="form-label" for="card-number">Card Number (demo only)</label>
					<input type="text" id="card-number" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-6"><div class="form-control">
					<label class="form-label" for="expiration">Expiration Date</label>
					<input type="text" id="expiration" class="form-input" required>
				</div></div>
				<div class="col-xs-12 col-md-6"><div class="form-control">
					<label class="form-label" for="security-code">Security Code (demo only)</label>
					<input type="text" id="security-code" class="form-input" required>
				</div></div>
				</div>
				<div class="form-control"><button type="submit" class="form-button">Place Order</button></div>
			</form>
			<a href="#checkout">Back to Shipping</a>
		</div>
	</div>

		</div>
	</div>
	


	<p><a href="product_cart.php">Back to Cart</a></p>

			</div>
	</div>
			
</body>
</html>
