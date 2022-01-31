<?php

/*
  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = '';
  $db='classicmodels';
  $mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

  if(! $mysqli ){
  die('Could not connect: ' . mysqli_error());
  }

  echo 'Connected successfully<hr>';
 */
include '../../dbconn.php';

$result = $mysqli->query("SELECT * FROM `classicmodels`.`employees` LIMIT 1000");

echo "<ul>";
echo "<li>ukupno redova u query: <b>" . $mysqli->affected_rows . "</b></li>";
echo "<li>ukupno stupaca u query: <b>" . $mysqli->field_count . "</b></li>";
echo "<li>spojen clijent: <b>" . $mysqli->client_info . "</b></li>";
echo "<li>client ver <b>" . $mysqli->client_version . "</b></li>";
echo "<li>host onfo: <b>" . $mysqli->host_info . "</b></li>";
echo "<li>server info: <b>" . $mysqli->server_info . "</b></li>";
echo "<li>server ver: <b>" . $mysqli->server_version . "</b></li>";
echo "<li>info: <b>" . $mysqli->info . "</b></li>";

echo "</ul>";

//var_dump($result->fetch_field_direct(1));
echo "polje: "
 . $result->fetch_field_direct(1)->name
 . " iz tablice: "
 . $result->fetch_field_direct(1)->table
 . " iz baze podataka: "
 . $result->fetch_field_direct(1)->db;

echo "<hr>";
// print_r();
foreach ($result->fetch_fields()as $value) {
    echo $value->name . " ";
}
echo "<hr>";

if ($row = $result->fetch_assoc()) {
    echo $row['officeCode']
    . " " . $row['city']
    . " " . $row['phone']
    . " " . $row['addressLine1']
    . " " . $row['postalCode']
    . "<br>";
}
if ($row = $result->fetch_array(MYSQLI_NUM)) { //MYSQLI_NUM=2 znaci dohvati podatke kao numerirani array
    echo $row[3]
    . " " . $row[7]
    . " " . $row[2]
    . " " . $row[0]
    . " " . $row[1]
    . "<br>";
}
if ($row = $result->fetch_assoc()) {
    echo $row['officeCode']
    . " " . $row['city']
    . " " . $row['phone']
    . " " . $row['addressLine1']
    . " " . $row['postalCode']
    . "<br>";
}

// vrati me na nulti rekord
$result->data_seek(0);

echo "<table border=1>";
echo "<tr>";
foreach ($result->fetch_fields()as $value) {
    echo "<th>" . $value->name . "</th>";
}
echo "</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $value) {
       echo "<td>".$value."</ td>";
    } 
    echo "</tr>";
}
echo "</table>";

/*
    echo $row['officeCode']
    . " " . $row['city']
    . " " . $row['phone']
    . " " . $row['addressLine1']
    . " " . $row['postalCode']
    . "<br>";

 */
//var_dump($row);

mysqli_close($mysqli);
