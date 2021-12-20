<?php
// Kreiranje kolačića
setcookie('email','test@test.com', time() + 86400, "/");  //traje 1 dan
// Ispis podatka i kolačića
echo $_COOKIE['email']."<br>";
// Brisanje kolačića
setcookie("email", "", time() - 3600);
// Ispis varijable kolačića
print_r($_COOKIE);

?>