<?php
error_reporting(E_ALL);
define('n', '<br/>');

// PSR-4 Autoloading:
require_once 'vendor/autoload.php';

// Classes needed:
use Shape\Circles\Circle;
use Shape\Quadrilaterals\Square;
use Shape\Triangles\RightTriangle;
use Shape\Quadrilaterals\Rectangle;
use Shape\Quadrilaterals\Parallelogram;
use Shape\Triangles\EquilateralTriangle;



echo "- Calculations With 2-D Shapes -".n.n;

//------------------------------------------------------------------------------
// ->Square:
$square = new Square(5);
echo "Square:" . n;
echo "-Dimensions: 5 by 5." . n;
echo "-Area equals to: {$square->getArea()}." . n;
echo "-Perimeter equals to: {$square->getPerimeter()}." . n;
echo "-Scale: 1.202 equals to: ";
print_r($square->scaleTo(1.202));
echo  "<hr/>";


//------------------------------------------------------------------------------
// ->Rectangle:
$rectangle = new Rectangle(5,3);
echo "Rectangle :" . n;
echo "-Dimensions 5 by 3." . n;
echo "-Area equals to: {$rectangle->getArea()}." . n;
echo "-Perimeter equals to: {$rectangle->getPerimeter()}." . n;
echo "-Scale: 0.2 equals to: ";
print_r($rectangle->scaleTo(0.2));
echo  "<hr/>";


//------------------------------------------------------------------------------
// ->Parallelogram:
$parallelogram= new Parallelogram(4,6,3);
echo "Parallelogram:" . n;
echo "-Dimensions  Side a = 4 Side b = 6 height = 3." . n;
echo "-Area equals to: {$parallelogram->getArea()}." . n;
echo "-Perimeter equals to: {$parallelogram->getPerimeter()}." . n;
echo "-Scale: 0.7 equals to: " ;
print_r($parallelogram->scaleTo(0.7));
echo  "<hr/>";


//------------------------------------------------------------------------------
// ->Equilateral Triangle:
$equilateralTriangle = new EquilateralTriangle(9);
echo "Equilateral Triangle:" . n;
echo "-Dimensions 9 by 9 by 9." . n;
echo "-Area equals to: {$equilateralTriangle->getArea()}." . n;
echo "-Perimeter equals to: {$equilateralTriangle->getPerimeter()}." . n;
echo "-Scale: 0.9 equals to: ";
print_r($equilateralTriangle->scaleTo(0.9));
echo  "<hr/>";


//------------------------------------------------------------------------------
// ->Right Triangle:
$rightTriangle = new RightTriangle(5, 12);
echo "Right Triangle   :" . n;
echo "-Dimensions height = 5 base = 12 hypotenuse = 13." . n;
echo "-Area equals to: {$rightTriangle ->getArea()}." . n;
echo "-Perimeter equals to: {$rightTriangle ->getPerimeter()}." . n;
echo "-Scale: 2 equals to: ";
print_r($rightTriangle ->scaleTo(2));
echo  "<hr/>";


//------------------------------------------------------------------------------
// ->Circle:
$circle = new Circle(4);
echo "Circle:" . n;
echo "-Radius= 4" . n;
echo "-Area equals to: {$circle ->getArea()}." . n;
echo "-Perimeter equals to: {$circle ->getPerimeter()}." . n;
echo "-Scale: 72 equals to: ";
print_r($circle ->scaleTo(72));
echo  "<hr/>";



