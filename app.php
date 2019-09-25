<?php

// espace de votre application

require_once './Lamp.php';
require_once './Light.php';

// le typage impose de la cohérence évite un code qui casserait !
$lamp = new Lamp(new Light);

// allumer la lampe
$lamp->switch();
echo $lamp; // echo => __toString

// éteindre la lampe
$lamp->switch();
echo $lamp; // echo  __toString
