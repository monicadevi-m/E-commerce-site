<?php
	include 'components/connect.php';

	if (isset($_COOKIE['user_id'])) {
		$user_id = $_COOKIE['user_id'];
	}else{
		$user_id = 'location:login.php';
	}

	$select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
	$select_orders->execute([$user_id]);
	$total_orders = $select_orders->rowCount();

	$select_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ?");
	$select_message->execute([$user_id]);
	$total_message = $select_message->rowCount();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fiorello - user profile page</title>
	<link rel="stylesheet" type="text/css" href="css/user_style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
	<?php include 'components/user_header.php'; ?>
	<div class="banner">
		<div class="detail">
			<h1>Profile</h1>
			<p>FIORELLO offers a diverse range of flowers and plants to brighten your space. Established in 2020,<br> we’re here to help you find the perfect green companion or floral touch for any occasion. Our collection<br> is thoughtfully curated to inspire and connect you with the natural world. Whether it’s a delicate flower<br> to express emotions or a robust plant to enhance your living space, we’re here to guide you to the <br>perfect choice. Trust us to be your partner in adding a touch of nature’s magic to your life.</p>
			<span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>Profile</span>
		</div>
	</div>
	
	<section class="profile">
		<div class="heading">
			<h1>profile detail</h1>
			<img src="image/separator-img.png">
		</div>
		<div class="details">
			<div class="user">
				<img src="uploaded_files/<?= $fetch_profile['image']; ?>">
				<h3><?= $fetch_profile['name']; ?></h3>
				<p>user</p>
				<a href="update.php" class="btn">update profile</a>
			</div>
			<div class="box-container">
				<div class="box">
					<div class="flex">
						<i class="bx bxs-folder-minus"></i>
						<h3><?= $total_orders; ?></h3>
					</div>
					<a href="order.php" class="btn">view orders</a>
				</div>
				<div class="box">
					<div class="flex">
						<i class="bx bxs-chat"></i>
						<h3><?= $total_message; ?></h3>
					</div>
					<a href="message.php" class="btn">view message</a>
				</div>
			</div>
		</div>
	</section>








	<?php include 'components/footer.php'; ?>
	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script src="js/user_script.js"></script>

	<?php include 'components/alert.php'; ?>
</body>
</head>