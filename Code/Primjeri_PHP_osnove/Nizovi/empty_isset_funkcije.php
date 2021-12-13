<?php 
$array = [0,null, true, true]; 
$names = ['Harry', 'Ron', 'Hermione']; 

var_dump(empty($array)); // true 
var_dump(empty($names)); // false 
var_dump(isset($names[2])); // true 
var_dump(isset($names[3])); // false

var_dump(isset($array));
var_dump(isset($array1));

// ovaj array ima elemenata niza....
echo count($array);
var_dump($array);

?>