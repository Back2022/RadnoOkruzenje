<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Pass both parameters.
$p1 = new Point3D(4, 5, 7); // x, y, z, name
// Pass only the required parameter. $y will take its default value of 0.
$p2 = new Point3D(x:4, y:0, z:3);
// With named parameters (as of PHP 8.0):
$p3 = new Point3D(x: 4, y:3, z:5, name:"t3d1");


echo $p1;
echo $p2;
echo $p3;

echo "konstanatna vrijednost varijable p3= ".$p3::CONST_VALUE;
//echo "konstanatna vrijednost varijable p3= ".$p3->CONST_VALUE;  // konstante!=SVOJSTVO !!!!
