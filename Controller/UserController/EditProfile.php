<?php

include "../../../Model/UserModel/User.php";

$user = new user();

$nama     = htmlspecialchars($_POST['nama']);
$gambar   = $_FILES['gambar']['name'];
$email    = htmlspecialchars($_POST['email']);
$username = htmlspecialchars($_POST['username']);
$alamat   = htmlspecialchars($_POST['alamat']);
$nomor_hp = htmlspecialchars($_POST['nomor_hp']);

if ($user->update_profil_user($_GET['id'], $nama, $username, $email, $alamat, $nomor_hp, $gambar)) {
    header("Location: ../../View/AdminPage/Profile.php");
} else {
    $error = "Gagal mengedit profil";
}

?>
