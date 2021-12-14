<?php 
echo "<hr>nacin 1<br>";
for ($i = 1; $i < 10; $i++) {    
    echo $i . " "; 
}

echo "<hr>nacin 2 unatrag <br>";
for ($i = 10; $i > 0; $i--) {    
    echo $i . " "; 
}
echo "<hr>nacin 3 unatrag neparni<br>";
for ($i = 33; $i > 0; $i-=2) {    
    echo $i . " "; 
}
echo "<hr>nacin 4 unatrag neparni<br>";
for ($i = 33; $i > 0; $i--) {  
    if($i%2==0){
        continue;
    }
    echo $i . " "; 
}

echo "<hr>nacin 5 unatrag neparni<br>";
for ($i = 33; $i > 0; $i--) {  
    if($i%2!=0){
           echo $i . " "; 
    }
}

echo "<hr>nacin 5 unatrag neparni od 33 do 13 <br>";
for ($i = 33; $i > 13; $i--) {  
    if($i%2!=0){
           echo $i . " "; 
    }
}
echo "<hr>nacin 5 unatrag neparni od 333 do 13 djeljivi sa 7 <br>";
for ($i = 333; $i > 13; $i--) {  
    if($i%7==0){
           echo $i . " "; 
    }
}

echo "<hr>djeljivi sa 7 i sa 3 <br>";
for ($i = 3; $i < 633; $i++) {  
    if($i%7==0 && $i%3==0){
        if($i%9==0) {
          echo "<span style='color:red'>$i</span>" . " ";   
        }
        else{
        echo $i . " "; 
        }
    }
}
?>