<?php namespace Fruit;

class Cart{

    private $storage = null;
    private $tva ;

    public function __construct(Storable $storage, float $tva = .2){

        $this->tva = $tva;
        $this->storage = $storage;
    }

    public function buy(Product $product, int $quantity){
        
    }
}