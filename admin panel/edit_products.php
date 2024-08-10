<?php
	include '../components/connect.php';

	if (isset($_COOKIE['seller_id'])){
		$seller_id = $_COOKIE['seller_id'];
	}else{
		$seller_id = '';
		header('location:login.php');
	}
	if (isset($_POST['update'])) {
		$product_id = $_POST['product_id'];
		$product_id = filter_var($product_id, FILTER_SANITIZE_STRING);

		$name = $_POST['name'];
		$name = filter_var($name, FILTER_SANITIZE_STRING);

		$price = $_POST['price'];
		$price = filter_var($price, FILTER_SANITIZE_STRING);

		$description = $_POST['description'];
		$description = filter_var($description, FILTER_SANITIZE_STRING);

		$stock = $_POST['stock'];
		$stock = filter_var($stock, FILTER_SANITIZE_STRING);
		$status = $_POST['status'];
		$status = filter_var($status, FILTER_SANITIZE_STRING);
		$status = $_POST['status'];
		$status = filter_var($status, FILTER_SANITIZE_STRING);

		$update_product = $conn->prepare("UPDATE `products` SET `name` = ?, `price` = ?, `product_detail` = ?, `stock` = ?, `status` = ? WHERE id = ?");
		$update_product->execute([$name, $price, $description, $stock, $status, $product_id]);

		$success_msg[] = 'product updated';

		$old_image = $_POST['old_image'];
		$image = $_FILES['image']['name'];
		$image = filter_var($image, FILTER_SANITIZE_STRING);
		$image_size = $_FILES['image']['size'];
		$image_tmp_name = $_FILES['image']['tmp_name'];
		$image_folder = '../uploaded_files/'.$image;

		$select_image = $conn->prepare("SELECT * FROM `products` WHERE image = ? AND seller_id = ?");
		$select_image->execute([$image, $seller_id]);

		if (!empty($image)) {
			if ($image_size > 2000000) {
				$warning_msg[] = 'image is too large';
			}elseif ($select_image->rowCount() > 0) {
				$warning_msg[] = 'please rename your image';
			}else{
				$update_image = $conn->prepare("UPDATE `products` SET image = ? AND id = ?");
				$update_image->execute([$image, $product_id]);
				move_uploaded_file($image_tmp_name, $image_folder);
				if ($old_image != $image AND $old_image != '') {
					unlink('../uploaded_files/'.$old_image);
				}
				$success_msg[] = 'image updated!';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fiorello - Admin Edit Products Page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin_style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>

	<div class="main-container">
		<?php include '../components/admin_header.php'; ?>
		<section class="post-editor">
			<div class="heading">
				<h1>edit product</h1>
				<img src="../image/separator-img.png">
			</div>
			<div class="box-container">
				<?php
					$product_id = $_GET['id'];
					$select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ? AND seller_id = ?");
					$select_product->execute([$product_id, $seller_id]);
					if ($select_product->rowCount() > 0) {
						while($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)){

				?>
				<div class="form-container">
					<form action="" method="post" enctype="multipart/form-data" class="register">
						<input type="hidden" name="old_image" value="<?= $fetch_product['image']; ?>">
						<input type="hidden" name="product_id" value="<?= $fetch_product['id']; ?>">
						<div class="input-field">
							<p>product status <span>*</span></p>
							<select name="status" class="box">
								<option value="<?= $fetch_product['status']; ?>" selected><?= $fetch_product['status']; ?></option>
								<option value="active">active</option>
								<option value="deactive">deactive</option>
							</select>
						</div>
						<div class="input-field">
							<p>product name <span>*</span></p>
							<input type="text" name="name" value="<?= $fetch_product['name']; ?>" class="box">
						</div>
						<div class="input-field">
							<p>product price <span>*</span></p>
							<input type="number" name="price" value="<?= $fetch_product['price']; ?>" class="box">
						</div>
						<div class="input-field">
							<p>product description <span>*</span></p>
							<textarea name="description" class="box"><?= $fetch_product['product_detail']; ?></textarea>
						</div>
						<div class="input-field">
							<p>product stock <span>*</span></p>
							<input type="number" name="stock" value="<?= $fetch_product['stock']; ?>" class="box" min="0" max="999999999" maxlength="10">
						</div>
						<div class="input-field">
							<p>product image <span>*</span></p>
							<input type="file" name="image" accept="image/*" class="box">
							<?php if ($fetch_product['image'] != '') {?>
								<img src="../uploaded_files/<?= $fetch_product['image']; ?>" class="image">
								<div class="flex-btn">
									<input type="submit" name="delete_image" class="btn" value="delete image">
									<a href="view_products.php" class="btn" style="width:49%; text-align: center; height:3rem; margin-top: .7rem;">go back</a>
								</div>
							<?php } ?>
						</div>
						<div class="flex-btn">
							<input type="submit" name="update" value="update product" class="btn">
							<input type="submit" name="delete_post" value="delete product" class="btn">
						</div>
					</form>
				</div>
				<?php
						}
					}else{
						echo '
							<div class="empty">
								<p>no products added yet!</p>
							</div>

						';
					
				?>
				<br><br>
				<div class="flex-btn">
					<a href="view_products.php" class="btn">view products</a>
					<a href="add_products.php" class="btn">add products</a>
				</div>
				<?php  } ?>
			</div>
		</section>
	</div>

	






	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link -->
	<script src="../js/admin_script.js"></script>

	<?php include '../components/alert.php'; ?>
</body>
</html>