<style>
p{color:red;}    
</style>
<?php

// Declare the class  -- ovo se zove php doc
/**
 * Ovo je primjer klase Car koja se ne nasljedjuje
 * @todo Probaj napraviti klasu koja naljedjuje Car
 * @author  Algebtra
 * @version 1.0.0
 */
class Car 
{
 
    // properties
    public $comp; 
    public $color = 'beige';
    public $hasSunRoof = true;
    
    // method that says hello
    /**
     * Funkcija se poziva bez parametara, vraća pozdrav u obliku string 
     * @return string
     */
    public function hello()
    {
        return "beep";
    }
    public function __toString() {
        
        if ($this->hasSunRoof){
        return "<hr><p>Dobar dan, ja sam $this->color boje i imam šiber <br></p>";
        }
        else{
           return "<hr><p>Dobar dan, ja sam $this->color boje ali nazalost nemam šiber :(<br></p>"; 
        }
    }
}
 
// Create an instance
$bmw = new Car ();
$mercedes = new Car ();

echo "kreiram novi automobil<br>";
$fiat=new Car();

echo "var dmp varijable fiat<br>";
var_dump($fiat);

echo "eco funkcije hello () iz fvar fiat<br>";
echo $fiat->hello();
echo "prije ovog teksta se javila sirena\n<br>";
echo $fiat;
$fiat->hasSunRoof=FALSE;
echo $fiat;
        
$fiat->color="zelene";
$fiat->comp="Fiat Marea";
echo $fiat;
        



// Get the values
echo $bmw->color; // beige
echo "<br />";
echo $mercedes->color; // beige
echo "<hr />";
 
// Set the values
$bmw->color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";
 
// Get the values again
echo $bmw->color; // blue
echo "<br />";
echo $mercedes->color; // beige
echo "<br />";
echo $bmw->comp; // BMW
echo "<br />";
echo $mercedes->comp; // Mercedes Benz
echo "<hr />";
 
// Use the methods to get a beep
echo $bmw->hello(); // beep
echo "<br />";
echo $mercedes->hello(); // beep

?>

<hr>
<p>Ovo je html</p>
<?php
echo "Ovo je php";
?>


<hr>
<p>Ovo je opet html</p>

<?= "Ovo je opet php"?>"
<?= "//include component A"?>