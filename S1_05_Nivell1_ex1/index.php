<?php

require_once 'class/interfaces.php';
require_once 'class/Animal.php';
require_once 'class/Gos.php';
require_once 'class/Gat.php';

$gos = new Gos("Gos");
echo $gos->soAnimal();
echo "\n";
$gat = new Gat("Gat");
echo $gat->soAnimal();

?>