<?php
	include("vendor/autoload.php");

	use Helpers\Auth;

	$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="navbar bg-primary navbar-dark">
		<div class="container">
			<a href="#" class="navbar-brand">
				<?= $auth->name ?>
				(<?= $auth->role ?>)
			</a>
		</div>
	</div>

	<div class="container mt-4" style="max-width: 600px">

		<?php if(file_exists("_actions/photos/$auth->photo")): ?>
			<img src="_actions/photos/<?= $auth->photo ?>" alt=""
				width="200">
		<?php endif ?>

		<form action="_actions/upload.php" method="post" enctype="multipart/form-data">
			<div class="input-group">
				<input type="file" name="photo" class="form-control">
				<button class="btn btn-secondary">Upload</button>
			</div>
		</form>

		<ul class="list-group my-4">
			<li class="list-group-item">
				<b>Email - </b> <?= $auth->email ?>
			</li>
			<li class="list-group-item">
				<b>Phone - </b> <?= $auth->phone ?>
			</li>
		</ul>

		<a href="admin.php">User Manager</a>
		<a href="_actions/logout.php" class="text-danger">Logout</a>
	</div>
</body>
</html>