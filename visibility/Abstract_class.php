<?php

abstract class Geometry
{
    protected $h;
    protected $w;

    abstract public function perimeter(): int;
}

class Triangle extends Geometry
{

    protected $h = 10;
    protected $w = 30;

    public function perimeter(): int
    {
        return 2 * ($this->h + $this->w);
    }
}

class Square extends Geometry
{

    protected $w = 30;

    public function perimeter(): int
    {
        return 4 * $this->w;
    }
}
