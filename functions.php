<?php
// require MySQL Connection
require 'database/DBController.php';

// require Product class
require 'database/Product.php';

// require Cart class
require 'database/Cart.php';

// new instance
$db = new DBController();

$product = new Product($db);
$product_shuffle = $product->getData();

$cart = new Cart($db);

// $array = array(
//     "user_id" => 2,
//     "item_id" => 9
// );

// $cart->insertIntoCart($array);
// $product->getData();

// print_r($product->getData()); //print to FE