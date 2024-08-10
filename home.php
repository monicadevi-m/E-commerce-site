<?php
	include 'components/connect.php';

	if (isset($_COOKIE['user_id'])) {
		$user_id = $_COOKIE['user_id'];
	}else{
		$user_id = '';
	}






?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fiorello - home page</title>
	<link rel="stylesheet" type="text/css" href="css/user_style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<?php include 'components/user_header.php'; ?>

	<!-- slider section start -->
	<div class="slider-container">
		<div class="slider">
			<div class="slideBox">
				<div class="imgBox">
					<img src="image/slider2.jpg">
				</div>
			</div>
			<div class="slideBox">
				<div class="imgBox">
					<img src="image/slider.jpg">
				</div>
			</div>
			<div class="slideBox">
				<div class="imgBox">
					<img src="image/slider10.jpg">
				</div>
			</div>
			<div class="slideBox">
				<div class="imgBox">
					<img src="image/slider11.avif">
				</div>
			</div>
			<div class="slideBox active">
				<div class="textBox">
					<h1>freshest flowers <br>in the town</h1>
					<a href="menu.php" class="btn">shop now</a>
				</div>
				<div class="imgBox">
					<img src="image/slider.avif">
				</div>
			</div>
		</div>
		<ul class="controls">
			<li onclick="nextSlide();" class="next"> <i class="bx bx-right-arrow-alt"></i> </li>
			<li onclick="prevSlide();" class="prev"> <i class="bx bx-left-arrow-alt"></i> </li>
		</ul>
	</div>
	<!-- slider section end -->
	<div class="service">
		<div class="box-container">
			<!-- service item box -->
			<div class="box">
				<div class="icon">
					<div class="icon-box">
						<img src="image/services.png" class="img1">
						<img src="image/services (1).png" class="img2">
					</div>
				</div>
				<div class="detail">
					<h4>delivery</h4>
					<span>100% secure</span>
				</div>
			</div>
			<!-- service item box -->
			<div class="box">
				<div class="icon">
					<div class="icon-box">
						<img src="image/services (2).png" class="img1">
						<img src="image/services (3).png" class="img2">
					</div>
				</div>
				<div class="detail">
					<h4>customer service</h4>
					<span>24*7 hours</span>
				</div>
			</div>
			<!-- service item box -->
			<div class="box">
				<div class="icon">
					<div class="icon-box">
						<img src="image/services (5).png" class="img1">
						<img src="image/services (6).png" class="img2">
					</div>
				</div>
				<div class="detail">
					<h4>payment</h4>
					<span>100% secure</span>
				</div>
			</div>
			<!-- service item box -->
			<div class="box">
				<div class="icon">
					<div class="icon-box">
						<img src="image/service.png" class="img1">
						<img src="image/service (1).png" class="img2">
					</div>
				</div>
				<div class="detail">
					<h4>returns</h4>
					<span>24*7 free return</span>
				</div>
			</div>
			<!-- server item box -->
			<div class="box">
				<div class="icon">
					<div class="icon-box">
						<img src="image/services (7).png" class="img1">
						<img src="image/services (8).png" class="img2">
					</div>
				</div>
				<div class="detail">
					<h4>exciting offers</h4>
					<span>and many more</span>
				</div>
			</div>
			<!-- service item box -->
			<div class="box">
				<div class="icon">
					<div class="icon-box">
						<img src="image/services.png" class="img1">
						<img src="image/services (1).png" class="img2">
					</div>
				</div>
				<div class="detail">
					<h4>delivery</h4>
					<span>on time</span>
				</div>
			</div>
		</div>
	</div>
	<!-- server section end -->
	<div class="categories">
		<div class="heading">
			<h1>categories</h1>
			<img src="image/separator-img.png">
		</div>
		<div class="box-container">
			<div class="box">
				<img src="image/categories4.jpeg">
				<a href="menu.php" class="btn">indoor plants</a>
			</div>
			<div class="box">
				<img src="image/categories1.jpeg">
				<div>
				<a href="menu.php" class="btn">wedding bouquets</a>
				</div>
			</div>
			<div class="box">
				<img src="image/categories5.jpeg">
				<div>
				<a href="menu.php" class="btn">flowering plants</a>
				</div>
			</div>
			<div class="box">
				<img src="image/categories3.jpeg">
				<div>
				<a href="menu.php" class="btn">general bouquets</a>
				</div>
			</div>
		</div>
	</div>
	<!-- categories section end -->
	<img src="image/main-banner.jpg" class="menu-banner">
	<div class="compliment">
		<div class="heading">
			<span>free compliments</span>
			<h1>buy any product & get 1 flower as compliment</h1>
			<img src="image/separator-img.png">
		</div>
	</div>
	<!-- compliment section end -->
	<div class="flower-container">
		<div class="overlay"></div>
		<div class="detail">
			<h1>Flowers are the Romeos and the Juliets of the nature!</h1>
			<h1><font color="lightpink"> ~ Mehmet Murat ildan</font></h1>
			<p>Happiness held is the seed, happiness shared is the flower.<br>Our passion for flowers goes beyond petals and stems — it’s about creating moments that last.</p>
			<a href="menu.php" class="btn">shop now</a>
		</div>
	</div>

	<!-- container section end -->
	<div class="variety">
		<div class="t-banner">
			<div class="overlay"></div>
			<div class="detail">
				<h1>find your favorite flowers</h1>
				<p>Flowers always make people better, happier, and more helpful; they are sunshine, food, and medicine for the soul!</p>
				<a href="menu.php" class="btn">shop now</a>
			</div>
		</div>
		<div class="box-container">
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>rose</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type0.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>calla lily</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type1.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>hydrangea</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type2.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>cymbidium orchid</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type3.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>tulip</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type4.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>carnation</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type5.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>sunflower</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type6.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>iris</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
			<div class="box">
				<div class="box-overlay"></div>
				<img src="image/type7.jpeg">
				<div class="box-details fadeIn-bottom">
					<h1>snapdragon</h1>
					<p>find your favorite flowers</p>
					<a href="menu.php" class="btn">explore more</a>
				</div>
			</div>
		</div>
	</div>
	<!-- variety section end -->
	<div class="birthday">
		<div class="box-container">
			<img src="image/sub-banner4.jpg">
			<div class="detail">
				<h1>Hot Deal! Sale Up To <span>20% off</span> </h1>
				<p>On Going</p>
				<a href="menu.php" class="btn">shop now</a>
			</div>
		</div>
	</div>
	<!-- birthday section end -->
	<div class="usage">
		<div class="heading">
			<h1>how it works</h1>
			<img src="image/separator-img.png">
		</div>
		<div class="row">
			<div class="box-container">
				<div class="box">
					<img src="image/use.png">
					<div class="detail">
						<h3>Choose Your Plant</h3>
						<p>Browse through our diverse selection of flowers and plants to find the one that’s just right for you or your loved one. Whether it’s a vibrant bouquet, a potted plant, or a unique arrangement, we have something for every occasion.</p>
					</div>
				</div>
				<div class="box">
					<img src="image/use0.png">
					<div class="detail">
						<h3>Recycle with Purpose</h3>
						<p>Our commitment to sustainability begins with the very flowers we cherish. Instead of letting floral waste go to waste, we recycle it into something beautiful.We transform discarded flowers into eco-friendly products, reducing waste and empowering communities.</p>
					</div>
				</div>
				<div class="box">
					<img src="image/discount.png">
					<div class="detail">
						<h3>Savings Blooming Bright</h3>
						<p>Unlock exclusive discounts and special offers! Our petals of generosity adorn every purchase. Keep an eye out for seasonal promotions and surprise deals—it’s not just a discount; it’s a delightful flourish! 🌸💐</p>
					</div>
				</div>
				<div class="box">
					<img src="image/delivery.png">
					<div class="detail">
						<h3>Delivered with Care</h3>
						<p>Our flowers arrive swiftly and safely, carried by dedicated hands. From our hearts to your doorstep, it’s not just a delivery; it’s a heartfelt connection. 🌼🚚</p>
					</div>
				</div>
				<div class="box">
					<img src="image/support.png">
					<div class="detail">
						<h3>Customer Care at Heart</h3>
						<p>Our dedicated customer service team is here to ensure your experience flourishes. From answering queries to resolving concerns, we’re just a message away. It’s not just support; it’s a bouquet of assistance tailored for you.🌸🌼</p>
					</div>
				</div>
			</div>
			<img src="image/frame39.png" class="divider">
			<div class="box-container">
				<div class="box">
					<img src="image/use1.png">
					<div class="detail">
						<h3>Sent with Love</h3>
						<p>Our flowers aren’t just petals; they’re heartfelt messages wrapped in delicate blooms. Each arrangement is crafted with care, as if we’re sending love directly to you. Let our flowers be your messenger! 🌸❤️</p>
					</div>
				</div>
				<div class="box">
					<img src="image/use2.png">
					<div class="detail">
						<h3>Grown with Care</h3>
						<p>Our flowers don’t just sprout; they thrive in an environment of love and attention. From seed to bloom, we nurture each petal, ensuring it’s free from harmful chemicals. It’s not just a bouquet; it’s a safe and natural gift for you and your loved ones. 🌱🌼</p>
					</div>
				</div>
				<div class="box">
					<img src="image/app.png">
					<div class="detail">
						<h3>Seamless Access</h3>
						<p>Whether you’re on a laptop or a phone, our website welcomes you with open petals. Our design ensures effortless navigation, so you can explore our floral world anytime, anywhere. It’s not just a website; it’s your floral sanctuary.🌿🌸</p>
					</div>
				</div>
				<div class="box">
					<img src="image/gift.png">
					<div class="detail">
						<h3>Heartfelt Surprise</h3>
						<p>As a token of our appreciation, we include a special gift with every order. It’s not just a package; it’s a little piece of joy from us to you. Unwrap it with a smile! 🎁❤️</p>
					</div>
				</div>
				<div class="box">
					<img src="image/return.png">
					<div class="detail">
						<h3>Hassle-Free Returns</h3>
						<p>Not completely satisfied? Our return process is as smooth as a petal’s touch. Simply reach out to our customer service, and we’ll guide you through the steps. It’s not just a transaction; it’s a promise of satisfaction. 🌸🛒</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- usage section end -->
	<div class="pride">
		<div class="detail">
			<h1>We Pride Ourselves On <br> Exceptional Flowers.</h1>
			<p>At the heart of our mission is a commitment to excellence.<br>We take pride in sourcing the finest, freshest flowers, <br>each chosen for its vibrant color,exquisite form, and lasting fragrance.<br>Our expert florists craft each bouquet with precision and care,<br>ensuring that when you choose our flowers, you're choosing a masterpiece of natural beauty.</p>
			<a href="menu.php" class="btn">shop now</a>
		</div>
	</div>
	<!-- pride section end -->
	<?php include 'components/footer.php'; ?>
	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script src="js/user_script.js"></script>

	<?php include 'components/alert.php'; ?>
</body>
</html>