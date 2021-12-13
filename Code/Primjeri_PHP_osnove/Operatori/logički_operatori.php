<?php
    $a = 0;
    $b = 0;
        var_dump ((bool)$a);   
        var_dump ((bool)$b);
    
    // Vraća false pošto je varijabla a true
    var_dump (!$a);
    // Vraća false pošto je varijabla b false
    var_dump ($a && $b);
    // Vraća false pošto je varijabla b false
    var_dump ($a and $b);
    // Vraća true pošto je varijabla a true
    var_dump ($a || $b);
    // Vraća true pošto je varijabla a true
    var_dump ($a or $b); 
    
// Vraća ILI ILI vrijednost (XOR), SAMO JEDAN TREBA BITI TRUE NE OBA
    var_dump ((bool)$a ^ (bool)$b);
?>