<?php
require_once '../models/Resep.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resep = new Resep();
    $resep->upload($_POST, $_FILES);
}
include '../views/upload_resep.php';
?>