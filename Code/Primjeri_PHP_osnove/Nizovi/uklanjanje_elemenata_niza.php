<?php 
// Inicijalizacija niza

$status = [    
    'name' => 'James Potter',    
    'status' => 'dead' 
];
print_r ($status);
echo "<hr>";
// Uklanjanje elementa iz niza (asocijacijom)
unset($status['status']);
 
print_r ($status);

$status[]="ččarolije";
echo "<hr>";
print_r ($status);
echo "<hr>";
// uklanjanje indeksirane vrijednosti
unset($status[0]);
echo "<hr>";
print_r ($status);

// uklanjanje cijele varijable niza
unset($status);
print_r ($status);



?>