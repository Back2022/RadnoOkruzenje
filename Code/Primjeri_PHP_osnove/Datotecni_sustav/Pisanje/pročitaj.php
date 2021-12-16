<?php

// Čitanje sadržaja datoteke
$booksJson = file_get_contents('knjige.json');


//print_r($booksJson);
//echo $booksJson;  // moze i ovako
// Prebacivanje u niz
$books_niz = json_decode($booksJson, true); // prabaci json u array

print_r($books_niz);


?>