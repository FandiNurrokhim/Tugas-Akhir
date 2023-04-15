<?php

include "../Controller/user.php";

class pembeli extends user {

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function get_id_by_username($username) {
        $sql = "SELECT id_pembeli FROM pembeli WHERE username='$username'";
        $result = $this->conn->query($sql);
        $data = mysqli_fetch_assoc($result);
    
        return $data['id_pembeli'];
    }


    public function transaksi($id_pembeli, $id_obat, $jumlah, $harga, $total, $saldo, $kembalian) {
        $sql = "INSERT INTO detail_pembelian (id_pembeli, id_barang, jumlah, harga, total, jumlah_bayar, kembalian) VALUES ('$id_pembeli', '$id_obat', '$jumlah', '$harga', '$total', '$saldo', '$kembalian')";
        $result = $this->conn->query($sql);
        
        if($result) {
            echo "<script>alert('Transaksi berhasil');</script>";
        } else {
            echo "<script>alert('Transaksi gagal');</script>";
        }
    }
}

?>