<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../models/Costumer.php';
    $costumer = new Costumer();
    $costumer->register($_POST);
}
include '../views/login.php';
?>