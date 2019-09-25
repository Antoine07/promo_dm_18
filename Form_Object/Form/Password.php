<?php

class Password{

    private $name ;
    private $label ;

    public function __construct(string $name, string $label){
        $this->name = $name;
        $this->label = $label;
    }

    public function __toString()
    {

        return sprintf(
            '<label>%s</label><input type="password" name="%s">',
            $this->label,
            $this->name
        );
    }
}