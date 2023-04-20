<?php

include "../../Controller/Produk/obat.php";

$obat = new Produk();


$aksi       = $_GET['aksi'];
$nama_obat  = htmlspecialchars($_POST['nama_obat']);
$gambar     = ($_POST['gambar']);
$kategori   = htmlspecialchars($_POST['kategori']);
$harga_obat = htmlspecialchars($_POST['harga_obat']);
$stok_obat  = htmlspecialchars($_POST['stok_obat']);
$deskripsi  = htmlspecialchars($_POST['deskripsi']);

if ($aksi == "tambah") {

    if ($obat->add_obat($nama_obat, $gambar, $kategori, $harga_obat, $stok_obat, $deskripsi)) {
        header("Location: ../../index.php");
    } else {
        $error = "Gagal menambahkan data obat";
    }

} elseif ($aksi == "edit") {

    if ($obat->edit_obat($_GET['id'], $nama_obat, $gambar, $kategori, $harga_obat, $stok_obat, $deskripsi)) {
        header("Location: ../../index.php");
    } else {
        $error = "Gagal mengedit data obat";
    }

} elseif ($aksi == "hapus") {

    if ($obat->delete_obat($_GET['id'])) {
        header("Location: ../../index.php");
    } else {
        $error = "Gagal menghapus data obat";
    }

}

$data_obat = $obat->get_obat();
?>