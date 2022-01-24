<?php

/**
 * Krug dio ravnine omeđen kružnicom
 *
 * @author Korisnik
 */
class Krug extends AbstractLik implements KrugInterface{
    //put your code here
    private float $S;
    private float $r;
    private Point3D $O; // središte kruga
    private Point3D $tr;  // tocka do koje se rasteze radijus kruznice
    private float $opseg;
    
    
    /**Kreiranje kruga
     * $t1 -središte
     * $t2 - radijus
     * 
     * samo radijus? (duzina)? središte u (0,0)
     */
    public function __construct(Point3D $t1, mixed $t2) { //pod t2 stavi point3D ili float radijus
     //   if (get_class(func_get_arg(1))!="Point3D" ){
     //var_dump($t2);
        //echo gettype(func_get_arg(1));
        if (gettype(func_get_arg(1))!="object" ){
            $this->r= $t2;           
        }
        else{
        $this->tr=$t2;  
        $this->r= (new Duzina($t1, $t2))->duljina();  
        }
        $this->O=$t1;      
        $this->povrsina();
        $this->opseg();       
        
    }
    public function povrsina() {
        // S=r*r*PI
        $this->S = $this->r*$this->r*pi();
        return $this->S;
    }

    public function opseg() {
        // S=2*r*PI
        $this->opseg = 2*$this->r*pi();
        return $this->opseg;
    }
    public function __toString() {
        $format = "<hr>Krug sa središtem u (%d,%d,%d) i radijusom %.2f"
                . "<br> Povrsina je %.2f"
                . "<br> Opseg je %.3f"; 
        return sprintf($format
                , $this->O->getX()
                , $this->O->getY()
                , $this->O->getZ()
                , $this->r
                , $this->S
                , $this->opseg               
                );
    }

    
    // dvaputa veći radijus= 4x veća površina !!!
    public function scale(float $factor) {
        $this->__construct($this->O, $this->tr->scale($factor));
    }

}
