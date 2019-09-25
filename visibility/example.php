<?php


abstract class Product
{
    public $price = 10;
    protected $name = 'Red stylo';
    private $ref = "123";
    private $tva = 0.2;

    protected $color = "red";

    public function getTva(){

        return $this->tva;
    }

    // contrat
    abstract public function modifyTva(string $tva);
}

class Stylo extends Product
{ 
    public $price = 1000; // valeur écrasée
    protected $name = 'Green stylo'; // valeur écrasée
    private $ref = "ABC"; // valeur non écrasée

    public function info(){

        // on ne peut pas y accéder car dans la classe Product et private
        // return $this->tva;
        // on y accède 
        return $this->color;
    }

    public function modifyTva(string $tva){

        
    }
}

$montblanc = new Stylo;
var_dump($montblanc);
echo $montblanc->info();
echo $montblanc->getTva();
