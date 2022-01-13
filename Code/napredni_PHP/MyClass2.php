<?php
include "./MyClass.php";
/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
class mojaTrecaKlasa extends MyClass2{
    public function printHello() {
        echo "<b>";
        parent::printHello();
        echo "</b>";
        
    }
}

$m3= new mojaTrecaKlasa();
$m3->printHello();

$obj2 = new MyClass2();
//echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // Undefined


echo "<hr>";
$obj2->printHello(); // Shows Public2, Protected2, Undefined