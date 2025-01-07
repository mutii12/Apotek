<?php
class Dokter {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'apotek_titik');
    }

    public function getAllDokter() {
        $result = $this->conn->query('SELECT * FROM tbl_dokter');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
