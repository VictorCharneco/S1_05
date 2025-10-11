<?php

require_once 'class/interfaces.php';
require_once 'class/Shape.php';
require_once 'class/Triangle.php';
require_once 'class/Rectangle.php';

$triangle1 = new Triangle(4, 8);
echo $triangle1->calculArea(); 
echo "\n";
$rectangle1 = new Rectangle(8, 18);
echo $rectangle1->calculArea();

?>