<?php 
// Niz kao lista  // niz s indeksima
$names = ['Harry', 'Ron', 'Hermione'];
// Niza kao mapa  // niz s asocijacijama
$status = [    
    'name' => 'James Potter',    
    'status' => 'dead',
    'age' => 24 
]; 
// Dodavanje novog elementa na kraj niza
$names[] = 'Neville';
// Nadjačavanje ključa u nizu
$status['age'] = 32; 
$status['status']=['dead','alive','undead'];

//polja ili nizove ispisujemo sa print_r
//echo $names;
$results = print_r($names,true );
echo $results;

//undead

echo "<br><b>".$status['status'][2]."</b><br>";


print_r($status);
?>