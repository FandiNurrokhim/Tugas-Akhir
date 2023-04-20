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
            header('location: ../../index.php');
        }
        else{
            echo "<script>alert('Username atau password salah');</script>";
        }
    }

    public function daftar_akun($username, $email, $password) {
        $sql = "INSERT INTO pembeli (username, email, password) VALUES ('$username', '$email', md5('$password'))";
        $result = $this->conn->query($sql);

        if($result) {
            header('location:../View/menu.php');
        } else {
            echo "<div class='alert alert-danger' role='alert'>Terjadi kesalahan saat membuat akun</div>";
        }
    }
    
}
?>