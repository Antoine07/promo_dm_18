<?php

require_once __DIR__ . '/vendor/autoload.php';

// importer les namespaces PHP 7.1
use Fruit\{Product, Cart, StorageSession, StorageArray, StorageDB};

// Hydratation de quelques produits qui viennent de la base de données
$dbProducts = [
    'apple'      => 10.5,
    'raspberry'  => 13,
    'strawberry' => 7.8,
];

// Hydratation des produits à partir des produits de la base de données
$products = []; // Objets de type Product

foreach($dbProducts as $name => $price){
    $products[$name] = new Product($name, $price);
}

extract($products); // variable clé avec valeur du tableau associatif

// echo '<pre>';
// print_r($apple);
// echo '</pre>';

$cart = new Cart( new StorageSession );

$cart->buy($apple, 1);
$cart->buy($apple, 1);
$cart->buy($apple, 1);
// $cart->reset();
$cart->buy($strawberry, 10);

echo '<pre>';
print_r($cart->total());
echo '</pre>';

$cart->restore($strawberry);

echo '<pre>';
print_r($cart->total());
echo '</pre>';