<?php namespace Model;

use Services\FlashMessage; // alias de nom

class User extends Model{

    public function __construct(){

        $this->flash  = new FlashMessage;
    }
}