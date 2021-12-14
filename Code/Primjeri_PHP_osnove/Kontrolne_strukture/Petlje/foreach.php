<?php 
$names = ['Harry', 'Ron', 'Hermione']; 
foreach ($names as $name) {    
    echo $name . " <br>"; 
} 

echo "<hr>";
foreach ($names as $key => $name) {   
     echo $key . " -> " . $name . " <br>"; 
}


echo "<hr>";
// neparni 1-33
$neparni=range(1,33,2);
//print_r($neparni);

foreach ($neparni as $value) {
    echo $value . " ";
}

echo "<hr>";
// neparni 1-33
$neparni=range(1,33,1);
//print_r($neparni);

foreach ($neparni as $value) {
    echo $value . " ";
}
echo "<hr>";
foreach ($neparni as $value) {
    if($value%2!=0){         
    echo $value . " "; 
    }
}
echo "<hr>";
foreach ($neparni as $value) {
    if($value%2==0){         
    continue;
    }
    echo $value . " "; 
}

$voce_boja=array(
    'banana'=>'zuta',
    'jabuka'=>'crvena',
    'kivi'  =>'zelena',
    'kokos' =>'smedja'
    );

echo "<ul>";
    foreach($voce_boja as $voce=>$boja){
        echo "<li>$voce je voce čija je boja $boja</li>";
    }
echo "</ul>";    

?>