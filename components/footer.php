<?php
	if (isset($_POST['subscribe'])) {
		$success_msg[] = 'successfully subscribed';
	}
?>
<div class="newsletter">
	<div class="content">
		<span>get latest fiorello updates</span>
		<h1>subscribe our newsletter </h1>
		<p>Stay in the loop with the latest floral trends and deals!<br>Subscribe to our newsletter for exclusive updates on new arrivals, special offers, and insightful tips for flower lovers.<br> Enjoy a special discount on your first purchase. Let your love for flowers grow with our weekly insights!</p>
		<form action="" method="post" class="register">
		<div class="input-field">
			<input type="email" name="" placeholder="Enter your E-Mail">
			<button type="submit" class="btn" name="subscribe">subscribe</button>
		</div>
		</form>
		<p>No ads, No trails, No commitment</p>
		<div class="box-container">
			<div class="box">
				<div class="box-counter"><p class="counter">500</p><i class="bx bx-plus"></i></div>
				<h3>Unique Flower</h3>
				<p>Varieties & Counting</p>
			</div>
			<div class="box">
				<div class="box-counter"><p class="counter">1000</p><i class="bx bx-plus"></i></div>
				<h3>Successfull Deliveries</h3>
				<p>Online Deliveries</p>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="content">
		<div class="box">
			<img src="image/logo1.png">
		</div>
		<div class="box">
			<h3>my account</h3>
			<a href="profile.php"> <i class="bx bx-chevron-right"></i>My account </a>
			<a href=""> <i class="bx bx-chevron-right"></i>Order history </a>
			<a href="wishlist.php"> <i class="bx bx-chevron-right"></i>Wishlist </a>
			<a href="news.php"> <i class="bx bx-chevron-right"></i>Newsletter </a>
		</div>
		<div class="box">
			<h3>information</h3>
			<a href="about-us.php"> <i class="bx bx-chevron-right"></i>about us </a>
			<a href=""> <i class="bx bx-chevron-right"></i>delivery information </a>
			<a href=""> <i class="bx bx-chevron-right"></i>privacy policy </a>
			<a href=""> <i class="bx bx-chevron-right"></i>terms & conditions </a>
		</div>
		<div class="box">
			<h3>contact us</h3>
			<p><i class="bx bxs-phone"></i>(91-) 9987654321</p>
			<p><i class="bx bxs-envelope"></i>Fiorello@gmail.com</p>
			<p><i class="bx bxs-location-plus"></i>Chennai,TN,India</p>
			<div class="icons">
				<i class="bx bxl-facebook"></i>
				<i class="bx bxl-twitter"></i>
				<i class="bx bxl-instagram"></i>
				<i class="bx bxl-linkedin"></i>
			</div>
		</div>
	</div>
	<center>
	<h4>We're always in search for talented and motivated people. Don't be shy intoduce yourself!</h4>
	<a href="contact.php" class="btn">contact now</a>
	</center>
	<div class="bottom">
		<p>Copyright © 2024 fiorello. All Rights Reserved</p>
		<a href="admin panel/login.php" class="btn">become a seller</a>
	</div>
</footer>