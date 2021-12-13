<?php
    // Primjer tekstalnog podatka unutar 
    // jednostrukih navodnika
    $str = 'Ovo je tekstualni podatak';
      echo $str;
    // Korištenje specijalnog znaka
    // za novi red unutar jednostrukih navodnika
    // neće raditi tj. ispisati će taj niz znakova.
    $str = 'Tekst u prvom redu \n tekst u drugom redu';
      echo $str;

    // Korištenja varijable unutar
    // jednostrukih navodnika neće raditi
    // tj. ispisati će taj niz znakova.
    $num = 9;
    $str = 'Broj: $num';
      echo $str;
?>