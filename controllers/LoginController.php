<?php
require_once '../models/Costumer.php';

class LoginController
{
    public function index()
    {
        include '../views/login.php';
    }

    public function getLoggedInCustomers()
    {
        $costumer = new Costumer();
        return $costumer->getLoggedInCustomers();
    }

    public function register($data)
    {
        $costumer = new Costumer();
        return $costumer->registerCustomer($data);
    }
    public function login($data)
    {
        $costumer = new Costumer();
        $result = $costumer->loginCustomer($data['email'], $data['password']);

        if ($result === true) {
            header('Location: ../index.php');
            exit;
        }

        return $result;
    }
}
