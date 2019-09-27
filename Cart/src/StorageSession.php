<?php namespace Fruit;

class StorageSession implements Storable
{

    public function __construct()
    {
        if (isset($_SESSION) == false)
            session_start();

        // initialise les sessions si elle vide on crée un tableau vide
        // pour ranger nos valeurs dans le storage
        if (empty($_SESSION['storage']))
            $_SESSION['storage'] = [];
    }

    public function setValue(string $name, float $total): void
    {
        if (array_key_exists($name, $_SESSION['storage'])) {
            $_SESSION['storage'][$name] += $total;
        } else {
            $_SESSION['storage'][$name] = $total;
        }
    }

    public function reset(): void
    { }

    public function total(): float
    {
        return array_sum($_SESSION['storage']);
    }

    public function restore(string $name): void
    { }
}
