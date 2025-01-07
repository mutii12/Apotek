<?php
require_once '../models/Obat.php';
$obat = new Obat();
$data = $obat->getAll();
include '../views/obat.php';
?>