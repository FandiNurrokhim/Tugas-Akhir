<?php

require_once "../Controller/user.php";

$user = new User();

// username dan password
$username = $_POST['username'];
$password = $_POST['password'];

$user->validasi_login($username, $password);


?>