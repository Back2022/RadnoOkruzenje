<?php 

/**
 * Klasa Employee kreira se uz name i posistion stringove
 * 
 * 
 */
class Employee 
{ 
	
	public $name; 

	public $position; 

        /**
         * 
         * @param string $name Ime zaposlenika
         * @param string $position Uloga
         */
	function __construct($name,$position) 

	{ 
		// This is initializing the class properties 
		$this->name=$name; 
		$this->profile=$position; 


	}	 
	function show_details() 
	{ 
		echo $this->name." : "; 
		echo "Your position is ".$this->profile."\n"; 
	} 
} 
	
$employee_obj= new Employee("Rakesh","developer"); 
$employee_obj->show_details(); 
	
$employee2= new Employee("Vikas","Manager"); 
$employee2->show_details(); 

