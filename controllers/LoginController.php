<?php
require_once '../models/Costumer.php';

class LoginController {
    public function index() {
        include '../views/login.php';
    }

    public function getLoggedInCustomers() {
        $costumer = new Costumer();
        return $costumer->getLoggedInCustomers();
    }

    public function register($data) {
        $costumer = new Costumer();
        return $costumer->registerCustomer($data);
    }
}
?>
