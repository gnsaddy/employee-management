<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="./css/style.css">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Semicolon</span> Technologies</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li class="current"><a href="login.php">Login</a></li>
					<li><a href="test.php">Employee</a></li>
					 <li><a href="contact.html">Contact</a> </li>

				</ul>
			</nav>

		</div>
	</header>
	<section id="boxes">
		<div class="container">

	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</div>
</section>



	<footer>
		<p>Team Semicolon, Copyright &copy; 2019</p>
	</footer>
</body>
</html>
