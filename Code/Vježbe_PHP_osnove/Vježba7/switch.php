<?php
setlocale(LC_ALL, 'croatian');
echo date('l');
// Provjera i ispis rezultata
switch(date('N')){ // 1=monday, 2= tue.....
    case 1:
        echo 'Danas je ponedjeljak.';
        break;
    case 2:
        echo 'Danas je utorak.';
        break;
    case 3:
        echo 'Danas je srijeda.';
        break;
    case 4:
        echo 'Danas je četvrtak.';
        break;
    case 5:
        echo 'Danas je petak.';
        break;
    case 6:
        echo 'Danas je subota.';
        break;
    case 7:
        echo 'Danas je nedjelja.';
        break;
    default:
        echo 'Nepostojeći dan.';
        break;
}
?>