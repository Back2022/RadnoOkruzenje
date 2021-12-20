<?php

// Za brisanje kolačića vrijeme postavite u prošlost
setcookie("user", "", time() - 3600);
setcookie("voce", "", time() - 3600);
echo "Cookie 'user' is deleted.";
?>