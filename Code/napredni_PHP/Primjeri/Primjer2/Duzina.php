<?php

//include "Point.php";
/**
 * Description of Duzina
 *
 * @author Korisnik
 */
class Duzina {

    private Point3D $p1;
    private Point3D $p2;

    public function __construct() {
       // var_dump(func_get_args());
        if (get_class(func_get_arg(0))=="Point3D"){
          $this->p1 = func_get_arg(0);
          $this->p2 = func_get_arg(1); 
        }
        elseif (get_class(func_get_arg(0))=="Point") {
          $p1= new Point3D(func_get_arg(0)->getX(), func_get_arg(0)->getY(),z:0)  ;
          $p2= new Point3D(func_get_arg(1)->getX(), func_get_arg(1)->getY(),z:0)  ;          
          $this->p1 = $p1;
          $this->p2 = $p2;
        }
        else{
            return "Argumenti nisu Point ili Point3D";
        }
        //$this->p1 = $p1;
       // $this->p2 = $p2;
    }
    
    public function __toString() {
        return "Dužina je pravac omeđen točkama:<hr>$this->p1  $this->p2"
                . " duljina je:" . $this->duljina() . "<br>"
                . " koeficijent pravca je:" . $this->koefPravca();
    }

    private function duljina() {
        $deltaX = $this->p2->getX() - $this->p1->getX();
        $deltaY = $this->p2->getY() - $this->p1->getY();
        $deltaZ = $this->p2->getZ() - $this->p1->getZ();
        $temp=sqrt(pow($deltaX, 2) + pow($deltaY, 2));
        return sqrt(pow($deltaZ, 2) + pow($temp, 2));
    }

    /**
     * Koeficijent smjera pravca
     * Koeficijent smjera pravca je mjera kojom se opisuje nagib pravca u Kartezijevom ili pravokutnom koordinatnom sustavu.
     * @link https://hr.wikipedia.org/wiki/Koeficijent_smjera_pravca Koeficijent smjera pravca
     */
    private function koefPravca() {
        $deltaX = $this->p2->getX() - $this->p1->getX();
        $deltaY = $this->p2->getY() - $this->p1->getY();
        
        if($deltaX!=0){
            $koef= $deltaY / $deltaX;
            return $koef;
        }
        else return "koef je beskonacan";
        
    }

}
