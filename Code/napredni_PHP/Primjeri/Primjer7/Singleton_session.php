<?php
session_start();
// Postavljanje sesijskih varijabli

/**
 * Trenutni zakljucak je da se singleton ne može serijalizirati
 * https://stackoverflow.com/questions/3782018/unable-to-serialize-an-object-based-on-a-singleton-in-php
 * ponovna deserijalizacija bi mogla dovesti do kloniranog objekta ??
 * 
 * 
 */

// General singleton class.
class Singleton {
    // Hold the class instance.
    private static $instance = null;  // Ovdje je spremljen objekt Singleton
    private $name="SingleJoe";
    
    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct()
    {
      // The expensive process (e.g.,db connection) goes here.
    }
    private function __clone() {
        
    }
    public function __wakeup() {
          throw new Exception("Cannot unserialize singleton");
    }
    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance()
    {
      if (self::$instance == null)
      { 
     
        if(isset($_SESSION["singleton"]) && $_SESSION["singleton"]!=""){
            var_dump($_SESSION);
            self::$instance = unserialize($_SESSION["singleton"]);
        }
        else{
           self::$instance = new Singleton(); 
        }
          /**/
      }
   
      return self::$instance;
    }
    /*
    public function __toString() {
        return $this->name;
    }*/
    public function setName($name) { //setter
        return $this->name=$name;
    }
    public function __destruct() {
        $_SESSION["singleton"] = serialize(self::$instance);
        echo $this->name." Je zavrsio priču";
    }
}

// All the variables point to the same object.
$object1 = Singleton::getInstance();
$object2 = Singleton::getInstance();
$object3 = Singleton::getInstance();

var_dump($object1);
var_dump($object2);
var_dump($object3);

$object2->setName("Nisam Joe");

        
var_dump($object1);
var_dump($object2);
var_dump($object3);



echo "<hr>";

echo json_encode($object3);
var_dump($_SESSION);
$object7=unserialize($_SESSION["singleton"]);
var_dump($object7);
/*
$object4= new Singleton();  // ONEMOGUCILI SMO DIREKTNO INSTANCIRANJE
$object4->setName("marica");
var_dump($object4);
*/