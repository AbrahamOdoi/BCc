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
		<div id='page' data-role='page' style=" width: 100%; height: 100%;background:white;">
			<img src="img/blue.png" id='splashimg' class='splashimg' style=" width: 100%;"/>
			<div style="text-align: center">
				<img src="img/logo.png" id='splashim' class='splashim' style=''/>
			</div>
			<div style="position: fixed;bottom: 0px;width: 100%;">
				<a href="http://41.242.113.3/retaileraccount/index.php" data-role="button" data-icon="home" data-corners="false" data-theme="b">LOGIN</a>
				<a href="#mail" data-role="button" data-icon="grid" data-corners="false" data-theme="b">CONTACT US</a>
				<a href="http://41.242.113.3/retaileraccount/logout.php" data-role="button" data-icon="back" data-corners="false" data-theme="b">LOGOUT</a>
			</div>
		</div>
		<div id='mail' data-role='page' style=" width: 100%; height: 100%;background:white;">
			<img src="img/logo.png" id='splashimg' class='splashimg' style=" width: 50%;"/>

			<div style="text-align: center;">
				<h1 style="color: gray;">CONTACT US</h1>
				<form action="" method="post">
					<input type="text" name="name" placeholder="Fullname" />
					<input type="email" name="email" placeholder="Email"/>
					<input type="text" name="subject" placeholder="Subject"/>
					<textarea cols="20" rows="50" name="message"></textarea>
					<input type="submit" value="Mail" name="email" data-theme="b" data-icon="check" />
				</form>
			</div>

		</div>
	</body>
</html>
