<?php 
// Inicijalizacija niza
$properties = [    
    'firstname' => 'Tom',    
    'surname' => 'Riddle',    
    'house' => 'Slytherin' 
];
// dupliciranje niza u nove varijable
$properties1 = $properties2 = $properties3 = $properties;
// sortiranje po vrijednosti uzlazno
// ključevi se resetiraju
sort($properties1); 
var_dump($properties1);
// sortiranje po vrijednosti uzlazno
// zadržava prvotne ključeve
asort($properties3); 
var_dump($properties3);
// sortiranje po ključu uzlazno
ksort($properties2); 
var_dump($properties2);

echo '<hr>';
$nekiniz=[true, null,7,5, 1,0,'g', 'G', 'e', 'true', 'A', 'Z','a','0'];
var_dump($nekiniz);
print_r($nekiniz);
$nekiniz1=$nekiniz2=$nekiniz;
        
sort($nekiniz1, flags: SORT_ASC); // isto kao sort($nekiniz1, 3);
natsort($nekiniz2);

print_r($nekiniz1);
print_r($nekiniz2);

?>