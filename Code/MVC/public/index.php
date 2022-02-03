<?php
namespace Core;

define('ROOT', 	realpath(__DIR__.'/../'));
require ROOT.'/libs/core/Bootstrap.php';
putenv("ENVIRONMENT=development"); //  upisao u php.ini

Bootstrap::init();

//var_dump(ENVIRONMENT);
//var_dump(Config::$dbconn);