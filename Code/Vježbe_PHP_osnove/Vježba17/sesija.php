<?php
// Pokretanje sesije
session_start();
// Zapisivanje podatak u sesijsku varijablu
$_SESSION['email'] = 'test@test.com';
// Ispis podatka iz sesije
echo $_SESSION['email'];
// Zatvaranje sesije
session_destroy();  // zaustavlja session ali ne brise podatke


echo "<hr>nakon session_destroy():<br>";
//
// Ispis sesijeske varijable
print_r($_SESSION);

unset($_SESSION['email1']);  // moze pojedinu varijablu


session_unset();  //pitanje je zasto ne radi kako smo zamislili...??
echo "<hr>nakon session_unset():<br>";
//unset($_SESSION);  // brise podatke preporuka je ne koristiti


print_r($_SESSION);


// PREPORUKA! koristiti ovo:
$_SESSION = Array();
echo "<hr>nakon SESSION = Array():<br>";

// Ispis sesijeske varijable
print_r($_SESSION);

// skipaj grešku, kao try bez catch
@print_r($_SESSION);  
?>