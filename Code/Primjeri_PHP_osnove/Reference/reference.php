<?php
    // Primjer bez reference
    $a = 5;
    $b = $a;
    $a = 6;
    // Vrijednost varijable b 
    // ostaje nepromjenjena
    echo "varijabla a = $a<br>";
    echo "varijabla b = $b<br>";
    

    // Primjer s referencom
    $a = 5;
    $b = &$a;
    $a = 6;
    // Vrijednost varijable b će 
    // poprimiti novu vrijednost varijable a
    
     echo "varijabla a = $a<br>";
     echo "varijabla b = $b<br>";
?>