<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HYGGE - Contact</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<?php include "parts/page_links.php"; ?>

		<div class="card soft">
			<h2>Contact HYGGE</h2>
			<p>Have a question about our furniture or your order? Leave us a message.</p>
			<p>This form is a layout example and does not send messages.</p>
			<form>
						<div class="form-control">
							<label class="form-label" for="contact-name">Name</label>
							<input type="text" id="contact-name" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label" for="contact-email">Email</label>
							<input type="email" id="contact-email" class="form-input">
						</div>
				<div class="form-control">
					<label class="form-label" for="contact-message">Message</label>
					<textarea id="contact-message" class="form-input" rows="5"></textarea>
				</div>
				<div class="form-control">
					<button type="button" class="form-button">Send Message</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>