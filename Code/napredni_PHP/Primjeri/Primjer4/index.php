<?php

include_once 'Math/Constants.php';
include_once 'Math/Geometry/Circle.php';
include_once 'Math/Geo/Circle.php';

$circle = new  Math\Geo\Circle(10);

echo $circle->getDiameter() . '<br>'; 		// 20
echo $circle->getArea() . '<br>'; 			// 314.159
echo $circle->getCircumference() . '<br>'; // 62.8318
echo $circle->getPromjer() . '<br>'; // 62.8318


use Math\Geometry\Circle; // importing a class

$circle = new  Circle(5);

echo $circle->getDiameter() . '<br>'; 		// 20
echo $circle->getArea() . '<br>'; 			// 314.159
echo $circle->getCircumference() . '<br>'; // 62.8318
//echo $circle->getPromjer();

use Math\Geometry\Circle as C; // importing a class with alias
use Math\Geo\Circle as CG;


$circle = new C(15);

echo $circle->getDiameter() . '<br>'; 		// 20
echo $circle->getArea() . '<br>'; 			// 314.159
echo $circle->getCircumference() . '<br>'; // 62.8318
//
$circle = new CG(15);

echo $circle->getDiameter() . '<br>'; 		// 20
echo $circle->getArea() . '<br>'; 			// 314.159
echo $circle->getCircumference() . '<br>'; // 62.8318
echo $circle->getPromjer() . '<br>'; // 62.8318