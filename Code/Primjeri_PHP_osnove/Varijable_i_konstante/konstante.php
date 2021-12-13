<?php
    // Imena konstanti trebalo bi pisati velikim slovima 
    // kako bi ih kasnije u kodu razlikovali

    define('PI', 3.14);

    // Konstante možemo definirati i malim slovima, 
    // ali to nije poželjno

    define('pi', 3.143);
    
    echo PI;
    $PI=43434;
    echo $PI;
    //ne moze redefinirati
  //  define('pi', 5.1258);
    echo pi;
    
?>