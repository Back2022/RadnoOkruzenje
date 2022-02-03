<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp():void
    {
        $this->calculator = new Calculator();
    }
 

    public static function tearDownAfterClass(): void {
       // $this->calculator = NULL;
    }
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}