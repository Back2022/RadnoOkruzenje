<?php


function osoba($name='joe',$surname='doe'){  
    return strtoupper($name.' '.$surname);  // sva slova prebaci u velika
}

function osoba1($name='joe',$surname='doe'){  
    return ucwords($name.' '.$surname);    // samo pocetna slova svake rijeci u velika
}

echo osoba('Pero', 'Djetlić');
echo "<br>";
echo osoba('Pero');
echo "<br>";
echo osoba(surname:'Djetlić');
echo "<br>";

echo osoba1('Pero', 'Djetlić');
echo "<br>";
echo osoba1('Pero');
echo "<br>";
echo osoba1(surname:'Djetlić');
echo "<br>";

