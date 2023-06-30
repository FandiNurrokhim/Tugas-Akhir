<?php

require_once "../../Model/UserModel/User.php";

session_start();
$user = new User();

// username dan password
$aksi     = $_GET['aksi'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($aksi == "masuk") {
    $user->login($username, $password);
} else if ($aksi == "daftar") {
    $user->sign_up($username, $email, $password);
} else if ($aksi == "logout") {
    session_unset();
    session_destroy();
    header("Location: ../../index.php");
    exit;
}
?>