<?php
// Definiranje varijabli
$integer = 10;
$float = 2.5;
$string = 'Algebra';
$bool = true;
// Ispis varijabli
echo $integer, $float, $string, $bool;
// Konstante
define('PITAGORA', 1.41);  //korijen iz 2 stranica trokuta 1 1 
define('TEODOR', 1.73);    //korijen iz 3
// Ispis konstanti
print PITAGORA;
print TEODOR;
// Reference
$a = 5;
$b = &$a;
print $b;
$a = 10;
print $b;
?>