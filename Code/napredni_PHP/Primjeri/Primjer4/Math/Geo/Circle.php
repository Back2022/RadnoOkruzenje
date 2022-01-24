<?php
namespace Math\Geo;
use Math\Constants;

class Circle 
{	
    public $radius;
    
    public function __construct($radius) 
    {
		$this->radius = $radius;
    }
    
    public function getDiameter() 
    {
		return $this->radius * 2;
    }
     public function getPromjer() 
    {
		return $this->radius * 2;
    }
    
    public function getArea() 
    {
		// (pi)(r^2)
        return Constants::PI *$this->radius*2;
		//return \Math\Constants::PI * $this->radius ** 2; 
    }
    
    public function getCircumference() 
    {
		// 2(pi)(r)
		return 2 * \Math\Constants::PI * $this->radius;
	}
}