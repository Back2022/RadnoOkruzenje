<?php

require 'vendor/autoload.php';

use Carbon\Carbon;
use Faker\Factory;

printf("Now: %s", Carbon::now());
//printf("Now: %s", );



echo "<br>";

$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
echo "<br>";
echo $faker->creditCardNumber;
echo "<br>";
echo $faker->email;
//phpinfo();
echo "<br>";
echo "<hr> Test za Carbon now():";
$x= new \Carbon\Carbon();
echo $x->englishDayOfWeek;
echo "<br>";

$x = Faker\Factory::create();  //create();
// generate data by calling methods
echo $x->name($gender='female');
echo "<br>";
echo $x->creditCardNumber;
echo "<br>";
echo $x->email;

