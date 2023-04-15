<?php

require_once "../../Controller/User/user.php";

$user = new User();

// username dan password
$aksi     = $_GET['aksi'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($aksi == "masuk") {
    $user->validasi_login($username, $password);
} else if ($aksi == "daftar") {
    $user->daftar_akun($username, $email, $password);
}
?>