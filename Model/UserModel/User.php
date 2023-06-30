<?php

require_once "Connection.php";

class user {

    protected $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "apotek");
        $db = new KoneksiDb();
        // Encapitulation
        $db->set_connection($this->conn);
        $db->get_connection();
    }

    public function is_user_admin($id_pembeli) {
        $sql = "SELECT role FROM pembeli WHERE id_pembeli = $id_pembeli";
        $result = mysqli_query($this->conn, $sql);
    
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $role = $row['role'];
            if ($role == 'admin') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_user_by_id($id_pembeli) {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli = $id_pembeli";
        $result = mysqli_query($this->conn, $sql);
    
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    
    public function login($username, $password) {
        $sql = "SELECT * FROM pembeli WHERE username='$username' AND password='".md5($password)."'";
        $result = $this->conn->query($sql);
        
        if($result->num_rows > 0){
            session_start();
            $data = mysqli_fetch_assoc($result);
            $_SESSION['id_pembeli'] = $data['id_pembeli'];
            $_SESSION['saldo']      = $data['saldo'];
            $_SESSION['role']       = $data['role'];
            $_SESSION['nomor_hp']   = $data['no_telp'];
            $_SESSION['nama']       = $data['nama_pembeli'];
            $_SESSION['email']      = $data['email'];
            $_SESSION['alamat']     = $data['alamat'];
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $password;
            header('location: ../../index.php');
        }
        else{
            echo "<script>
                    alert('Username atau password salah'); 
                    window.location.href='../../View/User/Login_Register_User/Login.php';
                  </script>";

        }
    }

    public function sign_up($username, $email, $password) {
        $sql = "INSERT INTO pembeli (username, email, password) VALUES ('$username', '$email', md5('$password'))";
        $result = $this->conn->query($sql);

        if($result) {
            header('location: ../../View/User/Login_Register_User/Login.php');
        } else {
            echo "<div class='alert alert-danger' role='alert'>Terjadi kesalahan saat membuat akun</div>";
        }
    }

    public function update_profil_user($id_pembeli, $nama, $username, $email, $alamat, $nomor_hp, $gambar) {
        $sql = "UPDATE pembeli SET nama_pembeli='$nama', email='$email', username='$username', alamat='$alamat', no_telp='$nomor_hp', foto_profil='$gambar' WHERE id_pembeli='$id_pembeli'";
        $result = $this->conn->query($sql);

        $target_dir = "../../View/ProductView/images/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
      
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function transaction($id_pembeli, $id_obat, $jumlah, $harga, $total, $saldo, $sisa_saldo) {
        $sql = "INSERT INTO detail_pembelian (id_pembeli, id_barang, jumlah, harga, total, jumlah_bayar, sisa_saldo) VALUES ('$id_pembeli', '$id_obat', '$jumlah', '$harga', '$total', '$saldo', '$sisa_saldo')";
        $result = $this->conn->query($sql);
        
        if($result) {
            header('location: ../../View/AdminPage/PurchaseDetails.php');
        } else {
            echo "<script>alert('transaction gagal');</script>";
        }
    }
    
    public function get_transaction($id_pembeli) {
        $sql = "SELECT detail_pembelian.id_pembelian, obat.gambar, obat.nama_obat, detail_pembelian.jumlah, detail_pembelian.total, detail_pembelian.tanggal_transaksi
        FROM detail_pembelian
        INNER JOIN obat ON detail_pembelian.id_barang = obat.id_obat
        WHERE detail_pembelian.id_pembeli = '$id_pembeli'
        ORDER BY detail_pembelian.id_pembelian DESC";

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
}
