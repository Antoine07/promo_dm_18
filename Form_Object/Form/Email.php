<?php

class Email{

    private $name ;
    private $value;
    private $label;
    private $error = '';

    public function __construct(string $name, string $label, string $value = ''){
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    public function setValue(string $value){
        $this->value = $value;
    }

    public function setError(string $error){
        $this->error = sprintf( 
        '<span class="error">%s</span>',
        $error);
    }

    public function __toString()
    {

        return sprintf(
            '<label>%s</label><input type="email" name="%s" value="%s">%s',
            $this->label,
            $this->name,
            $this->value,
            $this->error
        );
    }
}