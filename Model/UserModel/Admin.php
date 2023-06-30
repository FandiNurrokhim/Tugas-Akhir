<?php

require_once "user.php";


class Admin extends user {

    public function get_user_transactions() {
        $sql = "SELECT dp.id_pembelian, p.nama_pembeli, o.nama_obat, o.deskripsi, o.gambar, dp.jumlah, dp.total, dp.tanggal_transaction
                FROM detail_pembelian dp
                JOIN pembeli p ON dp.id_pembeli = p.id_pembeli
                JOIN obat o ON dp.id_barang = o.id_obat";
    
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function get_transaction_by_date($tanggal) {
        $sql = "SELECT
                    detail_pembelian.id_barang AS id_barang,
                    obat.nama_obat AS nama_barang,
                    pembeli.nama_pembeli AS nama_pembeli,
                    detail_pembelian.jumlah AS jumlah_beli,
                    detail_pembelian.total AS total_harga,
                    detail_pembelian.tanggal_transaction AS tanggal_transaction
                FROM
                    detail_pembelian
                JOIN
                    obat ON detail_pembelian.id_barang = obat.id_obat
                JOIN
                    pembeli ON detail_pembelian.id_pembeli = pembeli.id_pembeli
                WHERE
                    detail_pembelian.tanggal_transaction = '$tanggal'";
    
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    
    public function get_income() {
        $sql = "SELECT SUM(total) AS pendapatan FROM detail_pembelian";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function get_order() {
        $sql = "SELECT COUNT(*) AS jumlah_transaction
                FROM detail_pembelian";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    
}

?>