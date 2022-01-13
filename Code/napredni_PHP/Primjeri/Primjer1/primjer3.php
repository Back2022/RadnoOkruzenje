<?php


// PRIMJER ENKAPSULACIJE
// https://www.google.com/search?q=php+encapsulation+definition&rlz=1C1GCEU_enHR981HR981&oq=php+encapsulation&aqs=chrome.2.69i57j0i512j0i22i30l8.5938j0j7&sourceid=chrome&ie=UTF-8
// 
// The parent class has its properties and methods
class Car 
{
  
    //A private property or method can be used only by the parent.
    private  $model;
    
    // Public methods and properties can be used by both the parent and the child classes.
    public function setModel($model)
    {
      $this->model = ucfirst(strtolower(trim($model))); // MUTATOR !!!
    }
     
    public function getModel()
    {
      return $this->model;
    }
}
     
    
//The child class can use the code it inherited from the parent class, 
// and it can also have its own code 
class SportsCar extends Car
{
  
  private $style = 'fast and furious';
  
  public function driveItWithStyle()
  {
    return '<br>Drive a '  . $this->getModel() . ' <i>' . $this->style . '</i>';
  }
  public function getModel() {
      return "<b>".parent::getModel()."</b>";
  }
}
  
  
//create an instance from the child class
$sportsCar1 = new SportsCar();
    
// Use a method that the child class inherited from the parent class
$sportsCar1->setModel('         feRRaRi   ');
  
// Use a method that was added to the child class
echo $sportsCar1->driveItWithStyle();

$sportsCar1->model="Lambo";

// Use a method that was added to the child class
echo $sportsCar1->driveItWithStyle();

$obicni= new Car();
$obicni->setModel("Mini cooper");
echo $obicni->getModel();
echo $obicni->driveItWithStyle();
