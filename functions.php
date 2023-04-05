<?php

require("./Database/Database.php");

require('./Database/Product.php');

require('./Database/Cart.php');

require('./Database/User.php');

$db = new Database();

$product = new Product($db);

$allProducts = $product->getProduct();

$cart = new Cart($db);

$user = new User($db);

$men_products = $product->getProductbyGender('M');
$women_products = $product->getProductbyGender('F');
