<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$p1 = new Point(1, 1, "Prva");
// Pass only the required parameter. $y will take its default value of 0.
$p2 = new Point(1,5, name:"Druga");

$d1=new Duzina($p1,$p2);

echo $d1;
// echo $d1->Duljina();  // ne moze jer je privatni  MODIFIKATOR PRISTUPA

