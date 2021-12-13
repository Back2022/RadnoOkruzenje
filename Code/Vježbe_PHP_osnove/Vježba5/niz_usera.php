<?php

$users=array(
    array('ime'=>'Marko',
        'prezime'=>'Marković',
        'godine'=>25,
        'spol'=>'M'),
    array('ime'=>'Laura',
        'prezime'=>'Swartz',
        'godine'=>22,
        'spol'=>'Z')
);

print_r($users);

//brišemo kljuc spol
unset($users[0]['spol']);
unset($users[1]['spol']);

//ponovo ispis
print_r($users);

//dodajk jednog usera na kraj
$users[]=array('ime'=>'Marica',
        'prezime'=>'Vittoni',
        'godine'=>62);
//ponovo ispis
print_r($users);


//svima stavljamo spol x
foreach ($users as $key => $value) {
    $users[$key]['spol']='x';
}

//ponovo ispis
print_r($users);