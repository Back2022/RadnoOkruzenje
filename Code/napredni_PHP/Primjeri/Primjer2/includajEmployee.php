<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new Employee('Marija','Arhivarka');

/*
$obj2 = new Car(); 
$obj2->hello();
 
 */


