<?php
	include 'components/connect.php';

	if (isset($_COOKIE['user_id'])) {
		$user_id = $_COOKIE['user_id'];
	}else{
		$user_id = '';
	}

	//sending message
	
	if (isset($_POST['send_message'])) {
		if ($user_id != '') {

			$id = unique_id();
			$name = $_POST['name'];
			$name = filter_var($name, FILTER_SANITIZE_STRING);

			$email = $_POST['email'];
			$email = filter_var($email, FILTER_SANITIZE_STRING);

			$subject = $_POST['subject'];
			$subject = filter_var($subject, FILTER_SANITIZE_STRING);

			$message = $_POST['message'];
			$message = filter_var($message, FILTER_SANITIZE_STRING);

			$verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message = ?");
			$verify_message->execute([$user_id, $name, $email, $subject, $message]);

			if ($verify_message->rowCount() > 0) {
				$warning_msg[] = 'message already exist';
			}else{
				$insert_message = $conn->prepare("INSERT INTO `message`(id, user_id, name, email, subject, message) VALUES(?,?,?,?,?,?)");
				$insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);

				$success_msg[] = 'comment inserted successfully';
			}
		}else{
			$warning_msg[] = 'please login first';
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fiorello - contact us page</title>
	<link rel="stylesheet" type="text/css" href="css/user_style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
	<?php include 'components/user_header.php'; ?>
	<div class="banner">
		<div class="detail">
			<h1>Contact us</h1>
			<p>FIORELLO offers a diverse range of flowers and plants to brighten your space. Established in 2020,<br> we’re here to help you find the perfect green companion or floral touch for any occasion. Our collection<br> is thoughtfully curated to inspire and connect you with the natural world. Whether it’s a delicate flower<br> to express emotions or a robust plant to enhance your living space, we’re here to guide you to the <br>perfect choice. Trust us to be your partner in adding a touch of nature’s magic to your life.</p>
			<span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>Contact us</span>
		</div>
	</div>
	<div class="services">
		<div class="heading">
			<h1>our services</h1>
			<p>....</p>
			<img src="image/separator-img.png">
		</div>
		<div class="box-container">
			<div class="box">
				<img src="image/2.png">
				<div>
					<h1>free fast shipping</h1>
					<p>...</p>
				</div>
			</div>
			<div class="box">
				<img src="image/1.png">
				<div>
					<h1>money back & guarantee</h1>
					<p>...</p>
				</div>
			</div>
			<div class="box">
				<img src="image/0.png">
				<div>
					<h1>online support 24/7</h1>
					<p>...</p>
				</div>
			</div>
			<div class="box">
				<img src="image/pin.png">
				<div>
					<h1>offline shop available</h1>
					<p>...</p>
				</div>
			</div>
		</div>
	</div>
	<div class="form-container">
		<div class="heading">
			<h1>drop us a line</h1>
			<p>...</p>
			<img src="image/separator-img.png">
		</div>
		<form action="" method="post" class="register">
			<div class="input-field">
				<label>name<sup>*</sup></label>
				<input type="text" name="name" required placeholder="enter your name" class="box">
			</div>
			<div class="input-field">
				<label>email<sup>*</sup></label>
				<input type="email" name="email" required placeholder="enter your email" class="box">
			</div>
			<div class="input-field">
				<label>subject<sup>*</sup></label>
				<input type="text" name="subject" required placeholder="reason.." class="box">
			</div>
			<div class="input-field">
				<label>comment<sup>*</sup></label>
				<textarea name="message" cols="30" rows="10" required placeholder="" class="box"></textarea>
			</div>
			<button type="submit" name="send_message" class="btn">send message</button>
		</form>
	</div>

	<div class="address">
		<div class="heading">
			<h1>our contact details</h1>
			<p>...</p>
			<img src="image/separator-img.png">
		</div>
		<div class="box-container">
			<div class="box">
				<i class="bx bxs-map-alt"></i>
				<div>
					<h4>address</h4>
					<p>100, george street<br>Anna nagar, Chennai, Tamilnadu, 600040.</p>
				</div>
			</div>
			<div class="box">
				<i class="bx bxs-phone-incoming"></i>
				<div>
					<h4>phone number</h4>
					<p>9987654321</p>
					<p>044-23456789</p>
				</div>
			</div>
			<div class="box">
				<i class="bx bxs-envelope"></i>
				<div>
					<h4>email</h4>
					<p>Fiorello@gmail.com</p>
				</div>
			</div>
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