<?php
$cookie_name = "user";
$cookie_value = "John Doe";
// Postavljanje kolačića
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("voce", "banana", time() + (60*60*24 * 30), "/"); // 86400 = 1 day
setcookie("boja", "zelena", time() + (60), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
// Za brisanje kolačića vrijeme postavite u prošlost
//setcookie("user", "", time() - 3600);
echo "Cookie 'user' is deleted.";
?>