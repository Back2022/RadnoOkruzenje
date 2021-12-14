<?php
// Definiranje varijabli
$a = -12;
$b = 10;
$c = -5;

// Provjera da li je vrijednost varijable b između a i c
if(($b > $a && $b < $c) || ($b < $a && $b > $c)){
    echo 'Vrijednost b je između a i c';
} else {
    echo 'Vrijednost b nije između a i c';
}
?>