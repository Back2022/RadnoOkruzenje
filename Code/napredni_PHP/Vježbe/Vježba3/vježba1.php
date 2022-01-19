<?php

abstract class Car 
{
    // Abstract classes can have properties
    protected $tankVolume;
   
    // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
      $this->tankVolume = $volume;
    }
   public function getTankVolume(){
       return $this->tankVolume;
   }
    // Abstract method
    abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car 
{
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
      $miles = $this->tankVolume * 30;
      return $miles;
    }
}

class Toyota extends Car 
{
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
      $miles = $this->tankVolume * 33;
      return $miles;
    }
   
    public function getColor()
    {
      return "beige";
    }
}

//$c1=new Car();  // apstraktne klase se ne mogu instancirati! one moraju biti nasljedene!!!

abstract class myCar extends Car{}  // pokusaj nasljedjivanja bez gazenja abstract metode
class myNewCar extends myCar{
    public function calcNumMilesOnFullTank() {   
        //
    }
}  

$mnc1=new myNewCar();  // napokon napravio objekt
$mnc1->setTankVolume(55);
echo "<hr>";
echo $mnc1->getTankVolume();echo "<hr>";


$toyota1 = new Toyota();
$toyota1->setTankVolume(10);
echo $toyota1->getTankVolume();echo "<hr>";
echo $toyota1->calcNumMilesOnFullTank();
echo "<hr>";
echo $toyota1->getColor();//beige