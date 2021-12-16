<?php

// Čitanje sadržaja datoteke
$booksJson = file_get_contents('knjige.json');

echo "<hr>";
//print_r($booksJson);
echo $booksJson;  // moze i ovako
// Prebacivanje u niz
$books_niz = json_decode($booksJson, true); // prabaci json u array
$books_objekt = json_decode($booksJson, false); //prebaci JSON u objekt
echo "<hr>";
print_r($books_niz);
echo "<hr>";
print_r($books_objekt);
echo "<hr>";

// One Hundred Years Of Solitude
echo $books_niz[2]['title'];  // ispis iz niza
echo "<hr>";

echo $books_objekt[2]->title;  // ispis iz objekta

echo "<hr>";
echo "<ol>";// ispis iz niza
foreach ($books_niz as $value) {
    echo "<li>".$value['title'].", autor:".$value['author']."</li>";
}
echo "</ol>";
echo "<hr>";
echo "<ol>";// ispis iz objekta
foreach ($books_objekt as $value) {
    echo "<li>$value->title, autor:$value->author</li>";
}
echo "</ol>";


?>