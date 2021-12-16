<?php

// pribrojavamo ulazni argument statickom stanju
function nekaSuma($broj){
   static $suma=0; // zadrzava vrijednost
   $suma+=$broj; 
   return $suma;
}

// mapiramo wrapper pokazivač na funkciju
$zbroj='nekaSuma';


// petljom 5x ispisujemo poziv preko wrappera sa random ulaznim podacima 
for ($i = 0; $i < 5; $i++) {
  echo $zbroj(rand(1,10)).'<br>';  
}

/**
 * TEKST ZADATKA
1)Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije. 
2) Deklarirajte funkciju kao varijablu.
3)Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u rasponu od 1 do 10 te ispišite rezultat.
4) Ponovite postupak pet puta.
 */