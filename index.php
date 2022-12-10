<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4 text-center" style="max-width: 500px">
		<h1 class="h4">Login</h1>

		<?php if(isset($_GET['register']) and $_GET['register'] == "success"): ?>
			<div class="alert alert-info">
				Register successful, please log in
			</div>
		<?php endif ?>

		<?php if(isset($_GET['login']) and $_GET['login'] == "fails"): ?>
			<div class="alert alert-warning">
				Incorrect login
			</div>
		<?php endif ?>

		<?php if(isset($_GET['suspended']) and $_GET['suspended'] == "true"): ?>
			<div class="alert alert-warning">
				Your account is suspended
			</div>
		<?php endif ?>

		<form action="_actions/login.php" method="post">
			<input type="email" name="email" placeholder="Email" class="form-control mb-2">
			<input type="password" name="password" placeholder="Password" class="form-control mb-2">

			<button class="btn btn-primary">Login</button>
		</form>
		<a href="register.php">Register</a>
	</div>
</body>
</html>