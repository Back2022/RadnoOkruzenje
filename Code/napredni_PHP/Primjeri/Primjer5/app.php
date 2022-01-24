<?php

// app.php
include_once 'includes/autoload.php';

//use Fruits\Apple;
use Fruits\Orange;
use Fruits\Banana;
try {
// freely use the classes
$apple = new Apple();
echo $apple->fruit . '<br>';


    $orange = new Orange();
echo $orange->fruit . '<br>';
} catch (Throwable $exc) {
    //echo $exc->getTraceAsString();
    echo ' dogodila se greska, nisam uspio kreirati objekt: ';
    echo explode(" ", $exc->getMessage())[1];
    echo "<br>";// print_r($exc->getTrace());   
}



$banana = new Banana();
echo $banana->fruit . '<br>';
///

// PRIMJER KAKO DOHVATITI GENERALNI EXCEPTION (ne radi)
////

function exception_handler($exception) {
  echo "NEUHVAĆENA GRESKA Uncaught exception: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');
 




$data = [];

try {
   error_reporting(0);
	$f = fopen('data.csv', 'r');

	do {
		$row = fgetcsv($f);
		$data[] = $row;
	} while ($row);

	fclose($f);
  error_reporting(level: E_ALL); // error_reporting(32767)  // 32767=2^15
} catch (Throwable $ex) {  // NE MOGU DOHVATITI WARNINGE, SAMO EXCEPTIONE
    echo "Pristojno javljam da se dogodila greškica";
	//echo $ex->getMessage();
}
	
