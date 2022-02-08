<?php

class Nova extends \App\Controller {

	public function __construct() {
		parent::__construct();  // vracamo novi objekt tipa View
	}
	
	public function index() {
            $var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
            
            
                                    //Template             //View                     //Varijable
		$this->view->render('layout/global', array('content' => 'home/nova'),$var_array);
               
                var_dump(get_defined_vars());
	}

}