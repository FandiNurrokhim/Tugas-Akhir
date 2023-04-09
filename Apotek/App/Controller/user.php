<?php

require_once "koneksi.php";

class user {

    private $conn;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function validasi_login($username, $password) {
        $sql = "SELECT * FROM pembeli WHERE username='$username' AND password='".md5($password)."'";
        $result = $this->conn->query($sql);
        
        if($result->num_rows > 0){
            session_start();
            $data = mysqli_fetch_assoc($result);
            $_SESSION['id_pembeli'] = $data['id_pembeli'];
            $_SESSION['saldo']      = $data['saldo'];
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $password;
            header('location:../View/menu.php');
        }
        else{
            echo "<script>alert('Username atau password salah');</script>";
        }
    }

    public function get_id_by_username($username) {
        $sql = "SELECT id_pembeli FROM pembeli WHERE username='$username'";
        $result = $this->conn->query($sql);
        $data = mysqli_fetch_assoc($result);
    
        return $data['id_pembeli'];
    }


    public function transaksi($id_obat, $jumlah) {
        $id_pembeli = $_SESSION['id_pembeli'];
        $sql = "INSERT INTO transaksi (id_pembeli, id_obat, jumlah) VALUES ('$id_pembeli', '$id_obat', '$jumlah')";
        $result = $this->conn->query($sql);
        if($result) {
            echo "<script>alert('Transaksi berhasil');</script>";
        } else {
            echo "<script>alert('Transaksi gagal');</script>";
        }
    }
}

?>