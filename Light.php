<?php

// CamelCase
/**
 * Son role unique faire de la lumière
 * La responsabilité de cette classe => changer d'état
 */
class Light{

    private $status = 'Off';

    public function turn():void{
        $this->status =  $this->status == 'Off' ? 'On' : 'Off';
    }

    // camelCase
    public function getStatus():string{

        return $this->status;
    }

}