<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'Controller/CustomerController.php';
//require 'Controller/ProductController.php';
require 'Model/Customer.php';
//require 'Model/Product.php';
require 'Model/CustomerLoader.php';
//require 'Model/ProductLoader.php';


if (!isset($_GET['customer'])){
    $_GET['customer'] = 0;
}
if (!isset($_GET['product'])){
    $_GET['product'] = 0;
}
if (!isset($_GET['group'])){
    $_GET['group'] = 0;
}


$controller = new CustomerController();
$controller->render((int)$_GET['customer'],$_GET['product'],$_GET['group']);





