<?php namespace Fruit;

class Cart
{

    private $storage = null;
    private $tva;

    public function __construct(Storable $storage, float $tva = 0.2)
    {
        $this->tva = $tva;
        $this->storage = $storage;
    }

    public function buy(Product $product, int $quantity):void
    {
        // var_dump($product);
        // var_dump($quantity);

        // les prix TVA du produit + prix HT
        $total = $quantity * $product->getPrice() * ($this->tva + 1);

        $this->storage->setValue($product->getName(), $total);
    }

    public function reset():void{

        $this->storage->reset();
    }

    public function total():float{

        return $this->storage->total();
    }

    public function restore(Product $product):void{

        $this->storage->restore($product->getName());
    }
}
