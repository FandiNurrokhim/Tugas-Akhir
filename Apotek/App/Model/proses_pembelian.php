<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  header('location: login.php');
}

if (!isset($_POST['id_obat']) || !isset($_POST['jumlah'])) {
  header('location: index.php');
}

$id_obat = $_POST['id_obat'];
$jumlah = $_POST['jumlah'];

include "../Controller/obat.php";
$obat = new Obat();
$detail_obat = $obat->getObatById($id_obat);

if ($jumlah > $detail_obat['stok_obat']) {
  echo "<script>alert('Stok tidak cukup!');</script>";
  header('location: detail_produk.php?id=' . $id_obat);
} else {
  $total_harga = $jumlah * $detail_obat['harga_obat'];

  include "../Controller/pembelian.php";
  $pembelian = new Pembelian();
  $result = $pembelian->tambahPembelian($_SESSION['id_pembeli'], $id_obat, $jumlah, $total_harga);

  if ($result) {
    $sisa_saldo = $_SESSION['saldo'] - $total_harga;
    $_SESSION['saldo'] = $sisa_saldo;
    include "../Controller/pembeli.php";
    $pembeli = new Pembeli();
    $pembeli->updateSaldo($_SESSION['id_pembeli'], $sisa_saldo);

    echo "<script>alert('Pembelian berhasil!');</script>";
    header('location: riwayat_pembelian.php');
  } else {
    echo "<script>alert('Pembelian gagal!');</script>";
    header('location: detail_produk.php?id=' . $id_obat);
  }
}
?>
