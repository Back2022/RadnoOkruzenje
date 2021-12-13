<?php
    $a = 5;
    $a++;
    echo $a;
        echo "<hr>";
    // vrijednost varijable a 
    // uvećala se za 1
    $b = 10;
    $b--;
    echo $b;
        echo "<hr>";
    // vrijednost varijable b 
    // umanjila se za 1
    $c = $b--;
    echo $c;
    echo $b;
        echo "<hr>";
    // Vrijednost varijable c je poprimila
    // vrijednost varijable b, a nakon toga
    // se je vrijednost varijable b umanjila za 1
    $c = --$b;
    echo $c;
    echo $b;
        
    // Vrijednost varijable c je poprimila
    // vrijednost varijable b umanjene za 1

    echo "<hr>";
        $c = $b++;
    echo $c;
    echo $b;
        echo "<hr>";
    // Vrijednost varijable c je poprimila
    // vrijednost varijable b, a nakon toga
    // se je vrijednost varijable b umanjila za 1
    $c = ++$b;
    echo $c;
    echo $b;
        
    // Vrijednost varijable c je poprimila
    // vrijednost varijable b umanjene za 1

    echo "<hr>";
    ?>