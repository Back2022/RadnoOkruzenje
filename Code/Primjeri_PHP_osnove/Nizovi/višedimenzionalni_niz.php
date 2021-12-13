<?php
// Višedimenzionalni niz 
$books = [    
    " 1984" => [        
        'author' => 'George Orwell',        
        'finished' => true,        
        'rate' => 9.5    
    ],    
    'Romeo and Juliet' => [        
        'author' => 'William Shakespeare',        
        'finished' => false    
    ],
    array("jabuka","kruska", "šljiva"),
    
    array("jabuka1","kruska1", "šljiva1"),
    
      "vocnjak"=>array("voce"=>"jabuka3","kruska3", "šljiva3"),
    
     array("jabuka2","kruska2", "šljiva2"),
];
//šljiva3
print_r($books['vocnjak'][1]);
echo "\n";

print_r($books);
var_dump($books);
?>