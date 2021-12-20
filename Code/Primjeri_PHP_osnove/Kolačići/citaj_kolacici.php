<?php


if(empty($_COOKIE)) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
}
// Za brisanje kolačića vrijeme postavite u prošlost
//setcookie("user", "", time() - 3600);
echo "Cookie 'user' is deleted.";
?>