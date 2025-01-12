<?php
session_start();
require_once '../models/Costumer.php';

$costumer = new Costumer();

if (isset($_POST['register'])) {
    $costumer->registerCustomer([
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);
    header('Location: ../views/login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $costumer = new Costumer();

    if (isset($_POST['register'])) {
        $result = $costumer->registerCustomer($_POST);
        header('Location: ../views/login.php');
        exit;
    }

    if (isset($_POST['login'])) {
        $result = $costumer->loginCustomer($_POST['email'], $_POST['password']);
        if ($result === true) {
            header('Location: ../index.php');
        } else {
            echo "<script>alert('$result');</script>";
        }
    }
}
// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $stmt = $costumer->conn->prepare('SELECT id, password FROM tbl_costumer WHERE email = ?');
//     $stmt->bind_param('s', $email);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows === 0) {
//         die('Email tidak ditemukan.');
//     }

//     $user = $result->fetch_assoc();

//     if (!password_verify($password, $user['password'])) {
//         die('Password salah.');
//     }

//     $_SESSION['user_id'] = $user['id'];
//     $_SESSION['user_email'] = $email;
//     header('Location: ../views/home.php');
//     exit();
// }
