<?php
require_once '../../Model/UserModel/User.php';
session_start();

if (!isset($_SESSION['username']) OR !isset($_SESSION['password'])) {
  header('location: ../../View/UserView/Login.php');
} 

$id_obat    = $_GET['id'];
$jumlah     = $_POST['jumlah'];
$harga      = $_POST['harga_obat'];
$id_pembeli = $_SESSION['id_pembeli'];
$saldo      = $_SESSION['saldo'];

$total      = $jumlah * $harga;
$sisa_saldo = $saldo - $total;

// membuat instance class pembeli
$user = new user();

if ($saldo >= $total) {
  // memanggil method transaction dan memasukkan parameter yang diperlukan
  $user->transaction($id_pembeli, $id_obat, $jumlah, $harga, $total, $saldo, $sisa_saldo);
} else {
  // menampilkan pesan jika saldo tidak mencukupi dan mengarahkan ke halaman top up
  echo "<script>alert('Maaf, saldo anda tidak mencukupi. Silahkan top up saldo.');</script>";
  echo "<script>window.location.href = 'top-up.php';</script>";
  }
?>