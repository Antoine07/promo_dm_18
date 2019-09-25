<?php

/**
 * Le role/responsabilité c'est de changer l'état de la lumière (ampoule)
 * 
 * Une lampe est composé d'une ampoule (Light)
 */

class Lamp{

    private $light;

    // injection de dépendance avec du typage
    // pour ne pas faire n'importe quoi 
    public function __construct(Light $light)
    {
        // hard coding => couplage fort entre les classes
        // $this->light = new Light;
        $this->light = $light;
    }

    public function switch():void{
        $this->light->turn();
    }

    public function __toString():string
    {
        return $this->light->getStatus();
    }
}