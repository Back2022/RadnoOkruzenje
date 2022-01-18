<?php

/**
 * Description of MojStatic
 *
 * @author Korisnik
 */
class MojStatic {
    static $mojCounter; // broj matematickih poziva 
    static function kvadriraj($param):float {
        self::$mojCounter++;
        
        return  $param*$param;
    }
    static function kub($param):float {
        static::$mojCounter++;
        return  $param*$param*$param;
    }    
    static function korijen($param):float {
        static::$mojCounter;
        return  sqrt($param);
    }    
}



