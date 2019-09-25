<?php

class ErrorMessage{

    private $content ;

    public function __construct(string $content){
        $this->content = $content;
    }

    public function __toString()
    {

        return sprintf(
            '<div class="error">%s</div>',
            $this->content
        );
    }
}