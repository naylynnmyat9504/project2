<?php

$password = "apple";
$hash = password_hash($password, PASSWORD_DEFAULT);

$login = "Apple";

if(password_verify($login, $hash)) {
	echo "Correct password";
} else {
	echo "Incorrect password";
}
