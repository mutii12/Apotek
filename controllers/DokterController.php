<?php
require_once '../models/Dokter.php';

class DokterController {
    public function index() {
        $dokterModel = new Dokter();
        $dokters = $dokterModel->getAllDokter();
        include '../views/dokter.php';
    }
}

// Panggil metode index untuk menampilkan halaman dokter
$controller = new DokterController();
$controller->index();
?>
