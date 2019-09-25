<?php

session_start();

if( isset($_SESSION['auth']) == false ){

    // on arrête les scripts 
    die('silence is golden');

    /* Autre solution avec une redirection
    * header('Location: login.php');
    * exit;
    */
}

$message = $_SESSION['message'];

include './dashboard.tpl.php';