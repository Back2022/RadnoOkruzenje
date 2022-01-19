<?php

/**
 * Description of Trokut
 *
 * @author Korisnik
 */
class Trokut extends Lik {
    //put your code here
    private Point3d $a;
    private Point3d $b;    
    private Point3d $c;
    
    private Duzina $AB;
    private Duzina $BC;   
    private Duzina $CA;
     
    //Povrsina area
    private float $S;
    
    //Opseg
    private float $opseg;
      
     public function __construct($a,$b,$c) {
          $this->a=$a;
           $this->b=$b;         
           $this->c=$c;
           $this->AB= new Duzina($a,$b);
           $this->BC= new Duzina($b,$c);   
           $this->CA= new Duzina($c,$a);             
     }
     
    public function povrsina() {
        // samo u slucaju pravokutnog trokuta S=0.5(AB*BC) !!!!
        $this->S = 0.5*($this->AB->duljina() * $this->CA->duljina());
        return $this->S;
    }

    public function opseg() {
        $this->opseg= 
                  $this->AB->duljina()
                + $this->BC->duljina()
                + $this->CA->duljina();
        return $this->opseg;
    }

}
