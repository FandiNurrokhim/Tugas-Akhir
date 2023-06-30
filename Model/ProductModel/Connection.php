<?php

class Koneksi {
    private $host     = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name  = "apotek";

    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }
    }

    public function get_connection() {
        return $this->conn;
    }
}
?>
