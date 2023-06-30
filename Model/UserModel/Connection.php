<?php

class KoneksiDb {
    private $conn;

    public function __construct() {
        $this->conn = null;
    }

    public function set_connection(mysqli $conn) {
        $this->conn = $conn;
    }

    public function get_connection() {
        return $this->conn;
    }
}
?>
