<?php
// Globalna varijabla
$a = 'Algebra';
$b = 'Algebra1';
function variableScope() {
    // Lokalna varijabla   
    $a = 'Backend developer';   
    // Ispis lokalne varijable
    echo $a;  
    // Lokalna varijabla koju proglasavam globalnom
    global $b;   // koristiti s oprezom
    $b= 'Backend developer1';   
    // Ispis lokalne varijable
    echo $b;
}
// Ispis Globalne varijable
echo $a;
echo $b;
echo "<hr>";
variableScope();
echo "<hr>";
echo $a;
echo $b;




?>