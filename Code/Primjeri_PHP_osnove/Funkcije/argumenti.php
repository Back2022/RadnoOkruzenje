<?php
declare(strict_types=1);  // inzistiramo na čvrsto definiranim tipovima varijabli
/**
 * Zbraja dava broja i ispisuje ih na ekran
 * @param float $a prvi pribrojnik
 * @param mixed $b drugi pribrojnik
 * @param boolean $printResult <code>true</code> Ispisuje <b>zbroj</b> u konzolu
 * @return float zbroj
 */
function addNumbers(float $a, mixed $b, $printResult = false):float {    
    $sum = $a + $b;    
    if ($printResult) {        
        echo 'The result is ' . $sum. '<br>';    
    }    
    return $sum; 
}

//$sum1 = addNumbers('1', 2);  // ne moze jer je string a strict type zahjeva float 
$sum1 = addNumbers(1, '2');  // ovo moze
$sum1 = addNumbers(3, 4, false); 
$sum1 = addNumbers(5.5, 6, true); // it will print the result


$sum1 = addNumbers(b:44.5, a: 5, printResult: true);
?>