<?php 
$names = ['Harry', 'Ron', 'Hermione',5.0, 'brojpi' =>3.14];
                              //needle   // haystack
$containsHermione = in_array('Hermione', $names); 
var_dump($containsHermione); // true

$containsSnape = in_array('Snape', $names); 
var_dump($containsSnape); // false 

echo "<hr>";
$broj=5;
$postojilibroj = in_array(needle: $broj, haystack: $names, strict: true); // identity
var_dump($postojilibroj); // false 
var_dump($names); // $names[3]= float 
var_dump($broj); // int
echo "<hr>";

$wheresRon = array_search('Ron', $names); 
var_dump($wheresRon); // 1 


$wheresVoldemort = array_search('Voldemort', $names); 
var_dump($wheresVoldemort); // false

$nadjipi = array_search('3.14', $names); 
var_dump($nadjipi); // hoće li ga naći? DA

$nadjipi = array_search('3.14', $names, strict: true); 
var_dump($nadjipi); // hoće li ga naći? NE

$nadjipi = array_search(3.14, $names, strict: true); 
var_dump($nadjipi); // hoće li ga naći? DA



?>