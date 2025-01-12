<?php
class Obat {
    public function getAll() {
        $conn = new mysqli('localhost', 'root', '', 'apotek_titik');
        $result = $conn->query('SELECT * FROM tbl_obat');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>