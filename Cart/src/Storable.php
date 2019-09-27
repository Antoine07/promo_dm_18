<?php namespace Fruit;

interface Storable{

    function setValue(string $name, float $price): void;

    // TODO les autres méthodes

    function reset():void;

    function total():float;

    function restore(string $name):void;
}