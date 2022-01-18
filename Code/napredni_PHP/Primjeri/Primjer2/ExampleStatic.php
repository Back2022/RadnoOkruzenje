<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ms1=new MojStatic();

echo $ms1->kvadriraj(7);

echo MojStatic::kvadriraj(8);

$a=10;
echo "<br>Kvadrat od $a je ".MojStatic::kvadriraj($a);
echo "<br>Kub od $a je "    .MojStatic::kub($a);
echo "<br>Korijen od $a je ".MojStatic::korijen($a);

Echo "<hr>Broj upita poslanih u static math kalkulator:";
echo "<br>".MojStatic::$mojCounter;
