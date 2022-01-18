<?php

//include "Point.php";
/**
 * Description of Duzina
 *
 * @author Korisnik
 */
class Duzina {

    private Point $p1;
    private Point $p2;

    public function __construct(Point $p1, Point $p2) {
        $this->p1 = $p1;
        $this->p2 = $p2;
    }

    public function __toString() {
        return "Dužina je pravac omeđen točkama:<hr>$this->p1  $this->p2"
                . " duljina je:" . $this->duljina() . "<br>"
                . " koeficijent pravca je:" . $this->koefPravca();
    }

    private function duljina() {
        $deltaX = $this->p2->getX() - $this->p1->getX();
        $deltaY = $this->p2->getY() - $this->p1->getY();
        return sqrt(pow($deltaX, 2) + pow($deltaY, 2));
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
