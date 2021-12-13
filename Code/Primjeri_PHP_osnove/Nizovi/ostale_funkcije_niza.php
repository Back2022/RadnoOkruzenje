<?php 
$properties = [    
    'firstname' => 'Tom',    
    'surname' => 'Riddle',    
    'house' => 'Slytherin',
    'nekielement'   // pod indexom 0
];
// Dohvaćanje ključeva elemenata niza
$keys = array_keys($properties); 
var_dump($keys);
// Dohvaćanje vrijednosti elemenata niza
$values = array_values($properties); 
var_dump($values);
// Brojanje elemenata niza
$size = count($properties); 
var_dump($size); // 3
// Spajanje dva niza u jedan
$good = ['Harry', 'ime'=>'Ron', 'Hermione']; 
$bad = ['Dudley', 'ime'=>'Vernon', 'Petunia']; 
$all = array_merge($good, $bad); 
var_dump($all);
print_r($all);

// kombinirani array

$kombi_niz=array_combine(keys: $keys, values: $values);
print_r($kombi_niz);

// mijesamo kljuceve
shuffle($keys);
$kombi_niz1=array_combine(keys: $keys, values: $values);
print_r($kombi_niz1);

?> 