<?php
include "../Controller/pembeli.php";
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  header('location: login.php');
}

$id_obat    = $_GET['id'];
$jumlah     = $_POST['jumlah'];
$harga      = $_POST['harga_obat'];
$id_pembeli = $_SESSION['id_pembeli'];
$saldo      = $_SESSION['saldo'];

$total     = $harga * $jumlah;
$kembalian = $saldo - $total;

// membuat instance class pembeli
$pembeli = new pembeli();

if ($saldo >= $total) {
  // memanggil method transaksi dan memasukkan parameter yang diperlukan
  $pembeli->transaksi($id_pembeli, $id_obat, $jumlah, $harga, $total, $saldo, $kembalian);
  } else {
  // menampilkan pesan jika saldo tidak mencukupi dan mengarahkan ke halaman top up
  echo "<script>alert('Maaf, saldo anda tidak mencukupi. Silahkan top up saldo.');</script>";
  echo "<script>window.location.href = 'top-up.php';</script>";
  }
?>
