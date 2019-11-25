<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> HAVANNA NAIL BAR</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<p class="image"></p>
		<nav>
			<div class="row clearfix">
				<img src="" class="logo">
				<ul class="main-nav animated slideInDown">
					<li><a href="newregister.php"> Register </a></li>
					<li><a href="indexfile.php">Home</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="contact.html">Contact Us</a></li>

				</ul>

			</div>
		</nav>

		<div class="main-content-header">
		<h1>  WELCOME TO <span>HAVANNA</span>.<br /> MORE THAN JUST NAILS! </h1>
		</div>
	</header>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>