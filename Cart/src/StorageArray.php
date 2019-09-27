<?php namespace Fruit;

class StorageArray  implements Storable
{

    private $storage = []; // array

    /**
     * setValue
     *
     * @param string $name
     * @param float $total
     * @return void
     */
    public function setValue(string $name, float $total): void
    {
        if ( array_key_exists($name, $this->storage) == true ) {
            $this->storage[$name] += $total;
        } else {
            $this->storage[$name] = $total;
        }
    }

    public function reset():void{

        $this->storage = [];
    }

    public function total():float{

        // $total = 0;
        // foreach($this->storage as $priceTotal){
        //     $total += $priceTotal;
        // }

        // return $total;

        return array_sum($this->storage);
    }

    public function restore(string $name):void{

        if( array_key_exists($name, $this->storage) ){
            unset($this->storage[$name]);
        }
    }
}
