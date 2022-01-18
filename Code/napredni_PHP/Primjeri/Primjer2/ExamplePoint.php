<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Pass both parameters.
$p1 = new Point(4, 5);
// Pass only the required parameter. $y will take its default value of 0.
$p2 = new Point(4);
// With named parameters (as of PHP 8.0):
$p3 = new Point(y: 5, x: 4);

echo $p1;
echo $p2;
echo $p3;



