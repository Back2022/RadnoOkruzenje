<?php
    $a = 5;
    // varijabli a dodjeljujemo vrijednost 5

    $b = 10;
    $c = $b;
    $d=10.0;
    // varijabli c dodjeljujemo vrijednost
    // varijable b
    if($a==$b){
        echo "a i b imaju istu vrijednost";
        
    }
    else{
             echo "a i b nemaju istu vrijednost";   
    }
        if($c==$b){
        echo "c i b imaju istu vrijednost";
        
    }
    else{
             echo "c i b nemaju istu vrijednost";   
    }
        
    echo"<hr>";
    if($c===$b){
        echo "c i b su indenticni";
        
    }
    else{
             echo "c i b nisu indenticni";   
    }
    
   echo"<hr>";
    if($c===$d){
        echo "c i d su indenticni";
        
    }
    else{
             echo "c i d nisu indenticni";   
    }
?>