<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$table = new UsersTable(new MySQL);
$id = $table->insert([
	"name" => $_POST['name'],
	"email" => $_POST['email'],
	"phone" => $_POST['phone'],
	"address" => $_POST['address'],
	"password" => $_POST['password'],
	// "role_id" => 1,
]);

if($id) {
	HTTP::redirect("/index.php", "register=success");
}

HTTP::redirect("/register.php", "register=fails");