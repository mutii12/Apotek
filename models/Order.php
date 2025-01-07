<?php
class Order {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'apotek_titik');
    }

    public function getObatList() {
        $result = $this->conn->query('SELECT * FROM tbl_obat');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addOrder($data) {
        $stmt = $this->conn->prepare('SELECT harga FROM tbl_obat WHERE id = ?');
        $stmt->bind_param('i', $data['id_obat']);
        $stmt->execute();
        $result = $stmt->get_result();
        $obat = $result->fetch_assoc();
        $total = $data['jumlah'] * $obat['harga'];
        
        $stmt = $this->conn->prepare('INSERT INTO tbl_order (id_obat, id_costumer, jumlah, total_harga) VALUES (?, ?, ?, ?)');
        $stmt->bind_param('iiid', $data['id_obat'], $data['id_costumer'], $data['jumlah'], $total);
        $stmt->execute();
    }

    public function getAllOrders() {
        $result = $this->conn->query('SELECT o.id, ob.nama_obat, o.jumlah, o.total_harga FROM tbl_order o JOIN tbl_obat ob ON o.id_obat = ob.id');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateOrder($data) {
        $stmt = $this->conn->prepare('SELECT total_harga / jumlah AS harga_satuan FROM tbl_order WHERE id = ?');
        $stmt->bind_param('i', $data['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $order = $result->fetch_assoc();
    
        if ($order) {
            $total = $data['jumlah'] * $order['harga_satuan'];
            $stmt = $this->conn->prepare('UPDATE tbl_order SET jumlah = ?, total_harga = ? WHERE id = ?');
            $stmt->bind_param('idi', $data['jumlah'], $total, $data['id']);
            $stmt->execute();
        } else {
            throw new Exception("Order tidak ditemukan.");
        }
    }
    

    public function deleteOrder($id) {
        $stmt = $this->conn->prepare('DELETE FROM tbl_order WHERE id = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }
}
?>