<?php

echo "<hr> ispisujem cookie <br>";

print_r($_COOKIE);
echo "<hr> brisem cookie <br>";
foreach($_COOKIE as $k=>$v){
  setcookie($k, "", time() - 3600,"/");   
}

print_r($_COOKIE);
?>