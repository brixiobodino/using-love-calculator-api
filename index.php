<!DOCTYPE html>
<html>
<head>
	<title>Love Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lato&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a837cb4006.js"></script>
</head>
<body>
<div class="wrapper">	
	<div class="form_container">
		<div class="form">
			<h1>Love Calculator</h1>
			<form action="" method="POST">
				<input type="text" name="fname" required placeholder="Enter Your First Name (no space allowed)">
				<input type="text" name="sname" required placeholder="Enter Your Love's First Name (no space allowed)">
				<input type="submit" name="submit" value="Calculate your love chance">
			</form>
			<p class="credit">with the use of <a href="https://rapidapi.com/ajith/api/love-calculator/">love calculator api</a></p>
		</div>

	</div>
	<div class="response">
		<?php include('response.php') ?>
	</div>
</div>
</body>
</html>