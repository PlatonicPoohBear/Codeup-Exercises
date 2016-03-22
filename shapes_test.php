<?php 

require_once 'Rectangle.php';
require_once 'Square.php';


$rectangle = new Rectangle(5, 4);

echo $rectangle->area() . PHP_EOL . $rectangle->perimeter() . PHP_EOL;

$square = new Square(5);

$area = $square->area();

$perimeter = $square->perimeter();

echo $area . PHP_EOL . $perimeter . PHP_EOL;



 ?>