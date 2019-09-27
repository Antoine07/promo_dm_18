<?php

// faites tout dans l'autre fichier app_array.php

require_once __DIR__ . '/vendor/autoload.php';

// importer les namespaces PHP 7.1
use Fruit\{Product, Cart, StorageSession};

// Hydratation de quelques produits
$products = [
    'apple'      => 10.5,
    'raspberry'  => 13,
    'strawberry' => 7.8,
];