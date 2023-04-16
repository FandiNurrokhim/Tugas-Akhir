<?php

include "user.php";

class Pembeli extends user {

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function get_transaksi_by_username($id_username) {
        $sql = "SELECT obat.nama_obat, obat.gambar, detail_pembelian.jumlah, detail_pembelian.harga, detail_pembelian.total, detail_pembelian.tanggal_transaksi
        FROM detail_pembelian
        JOIN obat ON detail_pembelian.id_barang = obat.id_obat
        WHERE detail_pembelian.id_pembeli = $id_username";
        
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function transaksi($id_pembeli, $id_obat, $jumlah, $harga, $total, $saldo, $sisa_saldo) {
        $sql = "INSERT INTO detail_pembelian (id_pembeli, id_barang, jumlah, harga, total, jumlah_bayar, sisa_saldo) VALUES ('$id_pembeli', '$id_obat', '$jumlah', '$harga', '$total', '$saldo', '$sisa_saldo')";
        $result = $this->conn->query($sql);
        
        if($result) {
            header('location: ../../View/User/Riwayat_Transaksi/daftar_beli.php');
        } else {
            echo "<script>alert('Transaksi gagal');</script>";
        }
    }
}

?>