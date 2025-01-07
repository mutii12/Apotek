<?php
require_once '../models/Order.php';
$order = new Order();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_order'])) {
        $order->addOrder($_POST);
    } elseif (isset($_POST['update_order'])) {
        $order->updateOrder($_POST);
    } elseif (isset($_POST['delete_order'])) {
        $order->deleteOrder($_POST['id']);
    }
}
$orders = $order->getAllOrders();
$obatList = $order->getObatList();
include '../views/order_baru.php';
?>