<?php
// Definiranje varijabli
$a = 10;
$b = 5;
$c = 'Algebra';
$d = 'Backend Developer';
// Ispis rezultata aritmetičkih operatora
echo $a + $b;
        echo "<hr>";
echo $a - $b;
        echo "<hr>";
        echo $a * $b;        echo "<hr>";
echo $a / $b;        echo "<hr>";
echo $a % $b;        echo "<hr>";
// Konkatenacija
$f = $c.'-'.$d;
echo $f;        echo "<hr>";
// Kombinirani operator dodjele
$a += $b;
echo $a;        echo "<hr>";
// Uperator usporedbe (veće od)
var_dump($a > $b);
// Operator inkrementa
echo ++$a;        echo "<hr>";
// Operator dekrementa
echo --$b;        echo "<hr>";

?>