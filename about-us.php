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
	<title>Fiorello - about-us page</title>
	<link rel="stylesheet" type="text/css" href="css/user_style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<?php include 'components/user_header.php'; ?>
	<div class="banner">
		<div class="detail">
			<h1>about us</h1>
			<p>FIORELLO offers a diverse range of flowers and plants to brighten your space. Established in 2020,<br> we’re here to help you find the perfect green companion or floral touch for any occasion. Our collection<br> is thoughtfully curated to inspire and connect you with the natural world. Whether it’s a delicate flower<br> to express emotions or a robust plant to enhance your living space, we’re here to guide you to the <br>perfect choice. Trust us to be your partner in adding a touch of nature’s magic to your life.</p>
			<span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
		</div>
	</div>

	<!-- story section start -->
	<div class="story">
		<div class="heading">
			<h1>our story</h1>
			<img src="image/separator-img.png">
		</div>
		<p>At FIORELLO, our story began in 2020 with a seed of inspiration. As lovers of nature’s splendor, we wanted to share the joy that flowers and plants bring into our lives. Our journey is rooted in the belief that every petal and leaf has the power to make a day brighter and a home warmer. We started as a small team with a big dream: to connect people with the beauty of flora. Today, we’re proud to offer a diverse collection that celebrates the art of horticulture.Join us in our mission to spread beauty and nurture growth, one bloom at a time.</p>
		<a href="menu.php" class="btn">our services</a>
	</div>
	<!-- story section end -->
	<div class="team">
		<div class="heading">
			<span>our team</span>
			<h1>Quality & Passion with our services</h1>
			<img src="image/separator-img.png" alt="">
		</div>
		<div class="box-container">
			<div class="box">
				<img src="image/team3.jpeg" class="img">
				<div class="content">
					<img src="image/shape-19.png" alt=""class="shap">
					<h2>Fiona</h2>
					<p>the florist</p>
				</div>
			</div>
			<div class="box">
				<img src="image/team2.jpeg" class="img">
				<div class="content">
					<img src="image/shape-19.png" alt="" class="shap">
					<h2>Lucy</h2>
					<p>the bouquet maker</p>
				</div>
			</div>
			<div class="box">
				<img src="image/team5.jpeg" class="img">
				<div class="content">
					<img src="image/shape-19.png" alt=""class="shap">
					<h2>Caroline</h2>
					<p>potted plants dealer</p>
				</div>
			</div>
			<div class="box">
				<img src="image/team4.jpeg" class="img">
				<div class="content">
					<img src="image/shape-19.png" alt=""class="shap">
					<h2>Julia</h2>
					<p>Flower farmer</p>
				</div>
			</div>
		</div>
	</div>

	<!-- team section end -->
	<div class="testimonial">
		<div class="heading">
			<h1>Testimonial</h1>
			<img src="image/separator-img.png">
		</div>
		<div class="testimonial-container">
			<div class="slide-row" id="slide1">
				<div class="slide-col">
					<div class="user-text">
						<h2>Mohammaed Shohaib.H</h2>
					</div>
					<div class="user-img">
						<img src="image/testimonial1.jpeg">
					</div>
				</div>
				<div class="slide-col">
					<div class="user-text">
						<h2>Shanmugapriya T K</h2>
					</div>
					<div class="user-img">
						<img src="image/testimonial2.jpeg">
					</div>
				</div>
				<div class="slide-col">
					<div class="user-text">
						<h2>Rathna.K</h2>
					</div>
					<div class="user-img">
						<img src="image/testimonial3.jpeg">
					</div>
				</div>
				<div class="slide-col">
					<div class="user-text">
						<h2>Monicadevi.M</h2>
					</div>
					<div class="user-img">
						<img src="image/testimonial4.jpeg">
					</div>
				</div>
				<div class="slide-col">
				    <div class="user-text">
				        <h2>Jersha Beltin.A</h2>
				    </div>
				    <div class="user-img">
				        <img src="image/testimonial9.jpeg">
				    </div>
				</div>
				<div class="slide-col">
				    <div class="user-text">
				        <h2>Gokula Priya.S</h2>
				    </div>
				    <div class="user-img">
				        <img src="image/testimonial6.jpeg">
				    </div>
				</div>
				<div class="slide-col">
				    <div class="user-text">
				        <h2>Gayathri.S</h2>
				    </div>
				    <div class="user-img">
				        <img src="image/testimonial7.jpeg">
				    </div>
				</div>
				<div class="slide-col">
				    <div class="user-text">
				        <h2>Delli Kumar.V</h2>
				    </div>
				    <div class="user-img">
				        <img src="image/testimonial8.jpeg">
				    </div>
				</div>
			</div>
		</div>
		<div class="indicator">
			<span class="btn1 active"></span>
			<span class="btn1"></span>
			<span class="btn1"></span>
			<span class="btn1"></span>
		</div>
	</div>
	<!-- testimonial section end -->
	<?php include 'components/footer.php'; ?>
	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script src="js/user_script.js"></script>

	<?php include 'components/alert.php'; ?>
</body>
</html>