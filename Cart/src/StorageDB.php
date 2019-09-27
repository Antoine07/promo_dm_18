<?php namespace Fruit;

/**
 * Utiliser une table products avec un name price et total
 * Mettez tous les produits dans la tables et initialisez les totaux à 0
 * Voyez la remarque sur la méthode setValue et total si dessous pour vous aider
 * 
 * Utilisez des requêtes préparées
 */

class StorageDB  implements Storable
{

    private $database = [
        'dsn' => 'mysql:host=localhost;dbname=Fruit',
    'username' => 'root',
    'password' => ''
    ];

    private $db;

    public function __construct(){
        $defaults = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        $this->db = new PDO($this->database['dsn'],
            $this->database['username'], $this->database['password'],
            $defaults
        );

    }

    /**
     * setValue
     *
     * @param string $name
     * @param float $total
     * @return void
     */
    public function setValue(string $name, float $total): void
    {
      // UPDATE products SET total = total + :total WHERE name=:name
    }

    public function reset():void{

    }

    public function total():float{

        // SELECT SUM(total) as total FROM products
     
    }

    public function restore(string $name):void{

    }
}
