<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$auth = Auth::check();

$table = new UsersTable(new MySQL);

$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if($type == "image/jpeg" or $type == "image/png") {
	move_uploaded_file($tmp_name, "photos/$name");
	$table->updatePhoto($auth->id, $name);
	$auth->photo = $name;
}

HTTP::redirect("/profile.php", "upload=true");
