<?php
require_once './Form/Email.php';
require_once './Form/Password.php';
require_once './Form/ErrorMessage.php';

session_start();
$_SESSION = [];

define('DEBUG', true);

if (DEBUG) {
    $validate = 'novalidate';
}

$email = new Email('email', 'Email :');
$password = new Password('password', 'Password :');

if (empty($_POST) == false) {

    $flagError = false;

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
        $email->setError('Attention vérifiez la syntaxe de votre email');
        $flagError = true;
    }

    if ($flagError == false) {
        if ($_POST['email'] === 'alan@alan.fr' && $_POST['password'] === '123') {

            // on recrée l'identifiant de session
            session_regenerate_id(true);
            // jamais garder le password dans la variable de session
            $_SESSION['auth'] = 'alan';
            $_SESSION['message'] = "Bonjour Alan";

            // redirection vers le dashboard
            header('Location: ./dashboard.php');
            exit; // stop les scripts
        } else {
            $email->setValue($_POST['email']);
            $error = new ErrorMessage('Attention vous avez une erreur soit dans email, soit password');
        }
    }
}

// template
include 'login.tpl.php';
