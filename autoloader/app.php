<?php

/**
 * s'exécute lorsque la définition d'une classe n'est pas trouvée
 */
spl_autoload_register(
    function ($className) {

        var_dump($className); 
        
        $fileName =  str_replace('\\', '/', $className) . '.php';

        if(file_exists($fileName)) require_once $fileName;

        else die('pb chargement de classe');
        
    }
);

// require_once './Model.php';
// require_once './User.php';

// class User{}

$user = new \Model\User;

$flashMessage = new \Services\FlashMessage;
