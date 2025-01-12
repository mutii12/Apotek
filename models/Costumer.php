<?php
class Costumer
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'apotek_titik');
    }

    public function getLoggedInCustomers()
    {
        $result = $this->conn->query('SELECT id, nama, email FROM tbl_costumer');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function registerCustomer($data)
    {
        // Validasi input
        if (empty($data['nama']) || empty($data['email']) || empty($data['password'])) {
            die('Semua kolom harus diisi.');
        }

        // Cek apakah email sudah terdaftar
        $checkEmail = $this->conn->prepare('SELECT id FROM tbl_costumer WHERE email = ?');
        $checkEmail->bind_param('s', $data['email']);
        $checkEmail->execute();
        $result = $checkEmail->get_result();

        if ($result->num_rows > 0) {
            die('Email sudah terdaftar.');
        }

        // Hash password
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

        // Simpan data ke database
        $stmt = $this->conn->prepare('INSERT INTO tbl_costumer (nama, email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $data['nama'], $data['email'], $hashedPassword);
        $stmt->execute();
    }
    public function loginCustomer($email, $password)
    {
        $stmt = $this->conn->prepare('SELECT id, nama, password FROM tbl_costumer WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return 'Email tidak terdaftar.';
        }

        $customer = $result->fetch_assoc();

        if (!password_verify($password, $customer['password'])) {
            return 'Password salah.';
        }

        session_start();
        $_SESSION['nama'] = $customer['nama'];
        $_SESSION['id'] = $customer['id'];

        return true;
    }
}
