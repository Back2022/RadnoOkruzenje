<?php
    // Inicijalizacija praznog niza
    $empty1 = []; 
    $empty2 = array();
    // Inicijalizacija niza (lista) s podatcima
    $names1 = ['Harry', 'Ron', 'Hermione']; 
    $names2 = array('Harry', 'Ron', 'Hermione'); 
    
    print_r($names1);
    print_r($names2);
    // Inicijalizacija niza (mapa) s podatcima
    $status1 = [    
        'name' => 'James Potter',    
        'status' => 'dead' 
    ];   
    print_r($status1);
    
    $status2 = array(    
        'name' => 'James Potter',    
        'status' => 'dead' 
    );
    print_r($status2);
    
?>