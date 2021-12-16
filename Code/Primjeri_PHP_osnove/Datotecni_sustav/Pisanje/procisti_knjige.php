<?php

/**Funkcija koja uzima neki niz, pretvara ga u json text
 * Nakon toga isti JSON hashira MD5 algoritmom te dobija jedinstveni
 * niz od 40 znakova
 * @param array $ulaz
 * @return string
 */
function toMD5($ulaz){
    return md5(json_encode($ulaz));
}

/**Funkcija prima array i vraca true ako vec postoji taj hash u drugom
 * nizu
 * 
 * @param array $ulaz
 * @return bool
 */
function usporediHash($ulaz): bool{
    global $jedinstveni_hash;  // dohvati globalnu var jedinstvenih hashova
   $hash =md5(json_encode($ulaz));  // kreiraj hash
    if (in_array($hash, $jedinstveni_hash)) {  // pronadji parove
        $key = array_search($hash, $jedinstveni_hash); // ukoliko postoje
        unset($jedinstveni_hash[$key]); // obrisi hash iz liste
        return true;
    }
    return false;
}


// Čitanje sadržaja datoteke
$booksJson = file_get_contents('knjige.json');


//print_r($booksJson);
//echo $booksJson;  // moze i ovako
// Prebacivanje u niz
$books_niz = json_decode($booksJson, true); // prabaci json u array

//print_r($books_niz);


/**
 * REZULTAT:
 * Array
(
    [0] => 111488554829fad062d53b48725fe27f
    [1] => b022d373ae766880dbd5abb12230fd4e
    [2] => e2164b72ec1315d58772f76c91ba2612
)
 */
$md5hash = array_map('toMD5', $books_niz); // kreiramo niz hashova
$jedinstveni_hash = array_unique($md5hash);  // samo jedinstveni
$books_niz=array_filter($books_niz, "usporediHash");

//print_r($books_niz);
/*
 * 1) idi kroz svaki element niza books
 * 2) pretvori element u MD5 hash
 * 3) usporedi hash sa onim u nizu jedinstvenih 
 * 4) ukoliko nadjes, ostavi element a obrisi hash iz $jedinstveni_hash
 */


file_put_contents(__DIR__."/knjige.json", json_encode($books_niz, JSON_PRETTY_PRINT));

?>