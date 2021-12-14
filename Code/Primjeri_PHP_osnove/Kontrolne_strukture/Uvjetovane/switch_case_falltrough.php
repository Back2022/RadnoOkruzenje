<?php 
//$title = 'Twilight'; 
$title="Sam u kući";
switch ($title) {    
    case 'Harry Potter':        
        echo "Nice story, a bit too long.";        
        break;    
    case 'Lord of the Rings':   
    case 'Dracula':
    case 'Alexander the greeat':    
        echo "A classic!";        
        break;    
    default:        
        echo "Dunno that one.";        
        break; 
}

echo "<hr>";

$ocjena=1;
switch ($ocjena) {    
    case 5:        
        echo "Čestitam, izvrstan si!";        
        break;    
    case 4:   
    case 3:
    case 2:    
        echo "Propalico, baci se  vulkan!";        
        break;    
    default:        
        echo "Sadi rizu!";        
        break; 
}

?>