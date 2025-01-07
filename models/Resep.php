<?php
class Resep {
    public function upload($data, $file) {
        $conn = new mysqli('localhost', 'root', '', 'apotek_titik');
        $targetDir = '../uploads/';
        $fileName = basename($file['file_resep']['name']);
        $targetFilePath = $targetDir . $fileName;
        
        if (move_uploaded_file($file['file_resep']['tmp_name'], $targetFilePath)) {
            $stmt = $conn->prepare('INSERT INTO tbl_resep (id_costumer, file_resep) VALUES (?, ?)');
            $stmt->bind_param('is', $data['id_costumer'], $fileName);
            $stmt->execute();
        }
    }
}
?>