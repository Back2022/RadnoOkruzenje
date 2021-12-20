<?php

// Pokretanje sesije
session_start();

set_error_handler("warning_handler", E_WARNING);



function warning_handler($errno, $errstr) { 
echo "<hr><h2>GREŠKA</h2><br><code style='color:red'>$errno $errstr</code>";
echo "<br><code>Sessioni ne sadrze varijable koje pokusavate ispisati</code><hr>";
}

if (!empty($_SESSION["favcolor"]) && !empty($_SESSION["favanimal"])) {
    echo "Session variables are set.";
// Ispis vrijednosti sesijskih varijabli
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
}
//error_reporting(0);
try {
    echo "Session variables are set.";
// Ispis vrijednosti sesijskih varijabli
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

restore_error_handler();

try {
    echo "Session variables are set.";
// Ispis vrijednosti sesijskih varijabli
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


print_r($_SESSION);
?>