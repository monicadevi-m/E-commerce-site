<?php
	include 'components/connect.php';

	if (isset($_COOKIE['user_id'])) {
		$user_id = $_COOKIE['user_id'];
	}else{
		$user_id = '';
		header('location:login.php');
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fiorello - user order page</title>
	<link rel="stylesheet" type="text/css" href="css/user_style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
	<?php include 'components/user_header.php'; ?>
	<div class="banner">
		<div class="detail">
			<h1>My Orders</h1>
			<p>FIORELLO offers a diverse range of flowers and plants to brighten your space. Established in 2020,<br> we’re here to help you find the perfect green companion or floral touch for any occasion. Our collection<br> is thoughtfully curated to inspire and connect you with the natural world. Whether it’s a delicate flower<br> to express emotions or a robust plant to enhance your living space, we’re here to guide you to the <br>perfect choice. Trust us to be your partner in adding a touch of nature’s magic to your life.</p>
			<span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>My Orders</span>
		</div>
	</div>
	<div class="orders">
		<div class="heading">
			<h1>my orders</h1>
			<img src="image/separator-img.png">
		</div>
		<div class="box-container">
			<?php  
				$select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ? ORDER BY date DESC");
				$select_orders->execute([$user_id]);

				if ($select_orders->rowCount() > 0) {
					while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
						$product_id = $fetch_orders['product_id'];

						$select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
						$select_products->execute([$product_id]);

						if ($select_products->rowCount() > 0) {
							while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
								
			?>
			<div class="box" <?php if($fetch_orders['status'] == 'cancelled'){echo 'style = "border:2px solid red"';} ?>>
				<a href="view_order.php?get_id=<?= $fetch_orders['id']; ?>">
					<img src="uploaded_files/<?= $fetch_products['image'] ?>" class="image">
					<div class="content">
						<img src="image/shape-19.png" class="shap">
						<p class="date"><i class="bx bxs-calendar-alt"></i><?= $fetch_orders['date']; ?></p>
						<div class="row">
							<h3 class="name"><?= $fetch_products['name'] ?></h3>
							<p class="price">Price: Rs<?= $fetch_products['price'] ?>/-</p>
							<p class="status" style="color:<?php if ($fetch_orders['status'] == 'delivered') {echo "green";}elseif ($fetch_orders['status'] == 'cancelled') {echo "red";}else{echo "orange";} ?>"><?= $fetch_orders['status']; ?></p>
						</div>
					</div>
				</a>
			</div>
			<?php		
							}
						}
					}
				}else{
					echo '<p class="empty">no order took placed yet</p>';
				}
			?>
		</div>
	</div>
	
	<?php include 'components/footer.php'; ?>
	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script src="js/user_script.js"></script>

	<?php include 'components/alert.php'; ?>
</body>
</head>