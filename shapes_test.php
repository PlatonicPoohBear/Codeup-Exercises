<?php 

require_once 'Rectangle.php';
require_once 'Square.php';


$square = new Square(5);

$area = $square->area();

$perimeter = $square->perimeter();

echo $area . PHP_EOL . $perimeter . PHP_EOL;



 ?>