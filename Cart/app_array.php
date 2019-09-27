<?php

require_once __DIR__ . '/vendor/autoload.php';

// importer les namespaces PHP 7.1
use Fruit\{Product, Cart, StorageSession};

// Hydratation de quelques produits
$dbProducts = [
    'apple'      => 10.5,
    'raspberry'  => 13,
    'strawberry' => 7.8,
];

// Hydratation des produits à partir des produits de la base de données

$products = []; // Objets de type Product

new Product('apple', 18.2);