<?php

defined('DB_TYPE') or define('DB_TYPE', 'mysql');

switch (ENVIRONMENT) {

	case 'development':
		defined('DB_HOST') or define('DB_HOST',	'localhost');
		defined('DB_NAME') or define('DB_NAME',	'mvcdb');
		defined('DB_USER') or define('DB_USER',	'root');
		defined('DB_PASS') or define('DB_PASS',	'');
    break;
	case 'production':
		define('DB_HOST',	'localhost');
		define('DB_NAME',	'mvcdb');
		define('DB_USER',	'admin');
		define('DB_PASS',	'');
    break;
	default:
	// It's not great practice to have your DB credentials in your code 
	// Perhaps store them as constants? 
		define('DB_HOST',	getenv('DB_HOST'));
		define('DB_NAME',	getenv('DB_NAME'));
		define('DB_USER',	getenv('DB_USER'));
		define('DB_PASS',	getenv('DB_PASS'));

}