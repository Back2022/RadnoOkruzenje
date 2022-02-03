<?php

declare(strict_types=1);

namespace Core;

use PHPUnit\Framework\TestCase;
use \Core\Bootstrap;

final class BootstrapTest extends TestCase {

    public static function setUpBeforeClass(): void {
        define('ROOT', realpath(__DIR__ . '/../'));
        require ROOT . '/libs/core/Bootstrap.php';
        putenv("ENVIRONMENT=development"); //  upisao u php.ini
        Bootstrap::init();
    }

    public function testDbconnClassExists(): void {

        $this->assertFileExists(ROOT . '/conf/db/connection.php');
        Config::db();
        $mysqli = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);  //objektno
       
        $this->assertEquals(0, mysqli_connect_errno()
                ,''.mysqli_connect_error());
        $this->assertEquals('5.5.5-10.4.22-MariaDB',$mysqli->server_info);


    }

    public function testCoreClassExists(): void {

        $this->assertFileExists(ROOT . '/libs/core/Bootstrap.php');
        $this->assertFileExists(ROOT . '/libs/core/Config.php');
        $this->assertFileExists(ROOT . '/libs/core/Controller.php');
        $this->assertFileExists(ROOT . '/libs/core/Database.php');
        $this->assertFileExists(ROOT . '/libs/core/Model.php');
        $this->assertFileExists(ROOT . '/libs/core/Route.php');
        $this->assertFileExists(ROOT . '/libs/core/View.php');
    }
        public function testAppClassExists(): void {

        $this->assertFileExists(ROOT . '/libs/core/Controller.php');
        $this->assertFileExists(ROOT . '/libs/core/Model.php');
    }

}
