<?php
namespace Core;

class Config {

	public static function init() {
		date_default_timezone_set('Europe/London');
		self::setenv();
		self::db();
	}

	public static function setenv() {
		$environment = (getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production';
		defined('ENVIRONMENT') or define('ENVIRONMENT', $environment);
	}

	public static $dbconn = '/db/connection';

	public static function db() {
/**
 * var_dump(CONF);
 * C:\Users\Korisnik\Desktop\Radno okruženje\za-github\Code\MVC/conf
 * 
 * self::$dbconn
 * '/db/connection'
 * 
 * Route::$fileExtention
 * .php
 */           

//C:\Users\Korisnik\Desktop\Radno okruženje\za-github\Code\MVC/conf/db/connection.php
		require CONF.self::$dbconn.Route::$fileExtention;
	}
	
}