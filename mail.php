<!DOCTYPE html>
<html>
	<title>ICGC Devotional</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

	</head>
	<body>
		<div  data-role='page' style=" width: 100%; height: 100%;background:white;">
			<?php
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$to = "abrahamodoi2002@gmail.com";
			$headers = "From:" . $name . "<" . $email . ">";
			mail($to, $subject, $message, $headers);
			if (mail) {
				header("location:mainpage.php");
			}
			?>
		</div>

	</body>
</html>
