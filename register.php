<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4 text-center" style="max-width: 500px">
		<h1 class="h4">Register</h1>
		<form action="_actions/create.php" method="post">
			<input type="text" name="name" placeholder="Name" class="form-control mb-2">
			<input type="email" name="email" placeholder="Email" class="form-control mb-2">
			<input type="text" name="phone" placeholder="Phone" class="form-control mb-2">
			<textarea name="address" class="form-control mb-2" placeholder="Address"></textarea>
			<input type="password" name="password" placeholder="Password" class="form-control mb-2">

			<button class="btn btn-primary">Register</button>
		</form>
		<a href="index.php">Login</a>
	</div>
</body>
</html>