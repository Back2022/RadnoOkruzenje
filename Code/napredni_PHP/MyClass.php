<?php
/**
 * Description of MyClass
 *
 * @author Korisnik
 * @link https://www.php.net/manual/en/language.oop5.visibility.php 1.sat uvodni naprednog PHP
 */
class MyClass {
    public $public = 'Public';
    protected $protected = 'Protected';
   // private $private = 'Private';
protected $private = 'Private';
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
/*
$obj = new MyClass();
echo $obj->public; // Works
echo $obj->public;

echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private

 */