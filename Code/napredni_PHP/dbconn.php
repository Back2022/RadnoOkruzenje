<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db = 'classicmodels';
//$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $db); //proceduralno
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);  //objektno
mysqli_set_charset($mysqli, 'utf8');
if (mysqli_connect_errno()) {
    echo "Pogreška<br>";
    echo mysqli_connect_error();
    exit;
}

