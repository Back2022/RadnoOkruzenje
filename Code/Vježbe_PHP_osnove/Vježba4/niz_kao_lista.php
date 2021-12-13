<?php
echo '<pre>';
// Definiranje niza
$primeNumbers = [2,3,5,7,11];  // prosti brojevi
// Provjera trećeg elementa u nizu i ispis
var_dump(isset($primeNumbers[2]));
// Ispis trećeg elementa zato što postoji u nizu
echo $primeNumbers[2];
// Dodavanje novog elemementa na kraj niza
$primeNumbers[] = 13;
// Ispis broja elemenata u nizu
echo count($primeNumbers);
// Ispis cijelog niza
print_r($primeNumbers);
// Sortiranje niza silazno po vrijednostima
rsort($primeNumbers);
// Ispis cijelog niza
print_r($primeNumbers);
echo '</pre>';
?>