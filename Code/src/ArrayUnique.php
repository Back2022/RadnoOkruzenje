<?php

/**
 * Prima niz koji sadrzi druge nizove. Potrebno je izbaciti dvostruke elemente
 * @copyright (c) 2021, Predrag Mrvic
 * @example path $students=array(a[],b[],b[],3); ArrayUnique::ukloniDuplikate($students);
 * @author Mrvic
 */
class ArrayUnique {

    private static $jedinstveni_hash;

    public static function ukloniDuplikate(&$ulaz) {
        $md5hash = array_map('self::toMD5', $ulaz); // kreiramo niz hashova
        self::$jedinstveni_hash = array_unique($md5hash);  // samo jedinstveni
        $ulaz = array_filter($ulaz, "self::usporediHash");
// return array_filter($ulaz, "usporediHash");
    }

    /*     * Funkcija koja uzima neki niz, pretvara ga u json text
     * Nakon toga isti JSON hashira MD5 algoritmom te dobija jedinstveni
     * niz od 40 znakova
     * @param array $ulaz
     * @return string
     */

    private static  function toMD5($ulaz) {
        return md5(json_encode($ulaz));
    }

    /*     * Funkcija prima array i vraca true ako vec postoji taj hash u drugom
     * nizu
     * 
     * @param array $ulaz
     * @return bool
     */

    private static function usporediHash($ulaz): bool {
//global $jedinstveni_hash;  // dohvati globalnu var jedinstvenih hashova
        $hash = md5(json_encode($ulaz));  // kreiraj hash
        if (in_array($hash, self::$jedinstveni_hash)) {  // pronadji parove
            $key = array_search($hash, self::$jedinstveni_hash); // ukoliko postoje
            unset(self::$jedinstveni_hash[$key]); // obrisi hash iz liste
            return true;
        }
        return false;
    }

}
