<?php

interface Car {

    function getModel();

    function getWheel();

    function hasSunRoof();
}

class CarModelS implements Car {

    protected $model = 's';
    protected $wheel = 'sports';
    protected $sunRoof = true;

    public function getModel() {
        return $this->model;
    }

    public function getWheel() {
        return $this->wheel;
    }

    public function hasSunRoof() {
        return $this->sunRoof;
    }
    public function __toString() {
        return    "Ja sam "
    . $this->model
    . " tipa "
    . $this->wheel
    . " ima krovni otvor? "
    . ($this->sunRoof?"imam":"nemam");
    } 
}

class CarModelR implements Car {

    protected $model = 'r';
    protected $wheel = 'regular';
    protected $sunRoof = false;

    public function getModel() {
        return $this->model;
    }

    public function getWheel() {
        return $this->wheel;
    }

    public function hasSunRoof() {
        return $this->sunRoof;
    }
    public function __toString() {
        return    "Ja sam "
    . $this->model
    . " tipa "
    . $this->wheel
    . " ima krovni otvor? "
    . ($this->sunRoof?"imam":"nemam");
    } 
}

class CarFactory {

    protected $car; // Kojeg je ovo tipa


    // Determine which model to manufacture, and instantiate 
    //  the concrete classes that make each model.
    public function make($model = null) {
        if (strtolower($model) == 'r')
            return $this->car = new CarModelR();

        return $this->car = new CarModelS();
    }

}

class CarOrder {

    protected $carOrders = array();
    protected $car;

    // First, create the carFactory object in the constructor.
    public function __construct() {
        $this->car = new CarFactory();
    }

    public function order($model = null) {
        // Use the make() method from the carFactory.
        $car = $this->car->make($model);
        // $this->carOrders[]=$car->getModel();
        $this->carOrders[] = $car;
    }

    public function getCarOrders() {
        return $this->carOrders;
    }

}

$carOrder = new CarOrder;
var_dump($carOrder->getCarOrders());

$carOrder->order('r');
var_dump($carOrder->getCarOrders());

$carOrder->order('s');
var_dump($carOrder->getCarOrders());

foreach ($carOrder->getCarOrders() as $key => $value) {
echo "<hr>".$value." ja sa nastao od objakta tipa ".get_class($value);
}