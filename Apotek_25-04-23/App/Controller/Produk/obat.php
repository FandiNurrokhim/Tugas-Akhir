<?php

include "koneksi.php";

class Produk {
    private $conn;
    public $nama_obat;
    public $gambar;
    public $kategori;
    public $harga_obat; 
    public $stok_obat; 
    public $deskripsi;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function get_obat() {
        $sql = "SELECT * FROM obat";
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

    public function get_obat_by_id($id) {
        $sql = "SELECT * FROM obat WHERE id_obat='$id'";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    

    public function add_obat($nama_obat, $gambar, $kategori, $harga_obat, $stok_obat, $deskripsi) {
        $sql = "INSERT INTO obat (nama_obat, gambar, kategori, harga_obat, stok_obat, deskripsi) VALUES ('$nama_obat', '$gambar', '$kategori', '$harga_obat', '$stok_obat', '$deskripsi')";
        $result = $this->conn->query($sql);

        $target_dir = "../../View/Info_Produk/images/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function edit_obat($id_obat, $nama_obat, $gambar, $kategori, $harga_obat, $stok_obat, $deskripsi) {
        $sql = "UPDATE obat SET nama_obat='$nama_obat',gambar='$gambar', kategori='$kategori', harga_obat='$harga_obat', stok_obat='$stok_obat', deskripsi='$deskripsi' WHERE id_obat='$id_obat'";
        $result = $this->conn->query($sql);
        
        $target_dir = "../../View/Info_Produk/images/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_obat($id_obat) {
        $sql = "DELETE FROM obat WHERE id_obat=$id_obat";
        $result = $this->conn->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>