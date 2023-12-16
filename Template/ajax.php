<?php

// require MySQL Connection
require '../database/DBController.php';

// require Product class
require '../database/Product.php';

// new instance
$db = new DBController();

$product = new Product($db);

if (isset($_POST['itemid'])) {
    $result = $product->getProduct($_POST['itemid']);
    json_encode($result);
    echo $result;
}