<?php

/**
 * Description of Trokut
 *
 * @author Korisnik
 */
class Trokut extends Lik {
    //put your code here
    protected Point3d $a;
    protected Point3d $b;    
    protected Point3d $c;
    
    protected Duzina $AB;
    protected Duzina $BC;   
    protected Duzina $CA;
     
    //Povrsina area
    protected float $S;
    
    //Opseg
    protected float $opseg;
      
     public function __construct(Point3d $a,Point3d $b,Point3d $c) {
          $this->a=$a;
           $this->b=$b;         
           $this->c=$c;
           $this->AB= new Duzina($a,$b);
           $this->BC= new Duzina($b,$c);   
           $this->CA= new Duzina($c,$a);             
     }
     
    public function povrsina() {
        // samo u slucaju pravokutnog trokuta S=0.5(AB*BC) !!!!
       // $this->S = 0.5*($this->AB->duljina() * $this->CA->duljina());
        //return $this->S;
        
       
        /*UZ POMOĆ Trigonometrije i sinusovog pravilia
         * https://math.stackexchange.com/questions/128991/how-to-calculate-the-area-of-a-3d-triangle
        in 3D space
        If vectors a = [xa, ya, za], b = [xb, yb, zb], then:
        α = arccos[(xa * xb + ya * yb + za * zb) / (√(xa2 + ya2 + za2) * √(xb2 + yb2 + zb2))]
         https://www.omnicalculator.com/math/angle-between-two-vectors#how-to-find-the-angle-between-two-vectors
         */
        
         // RIJEŠIMO TO VEKTORIMA ZA SVAKI MOGUĆI TROKUT !!!
        $dx= $this->AB->v['y']*$this->BC->v['z']-$this->BC->v['y']*$this->AB->v['z'];
        $dy= $this->AB->v['x']*$this->BC->v['z']-$this->BC->v['x']*$this->AB->v['z'];
        $dz= $this->AB->v['x']*$this->BC->v['y']-$this->BC->v['x']*$this->AB->v['y'];        
                
        // rezultat je površina romba, za trokut trebamo podjeliti s 2
        return sqrt($dx*$dx + $dy*$dy + $dz*$dz)/2;  
        
    }
    public function __toString() {
        $format="<hr>Trokut je omeđen točkama:<br> %s %s %s Površina trokuta je:%.2f<br>"
                ."Opseg trokuta je:%.2f<br>"
                . " vektori koji opisuju trokut su %s %s %s";
        return sprintf($format
                , $this->a
                , $this->b
                , $this->c
                , $this->povrsina()
                ,$this->opseg()
                , $this->AB->getV()
                , $this->BC->getV()
                , $this->CA->getV()              
                );
    }
    public function opseg() {
        $this->opseg= 
                  $this->AB->duljina()
                + $this->BC->duljina()
                + $this->CA->duljina();
        return $this->opseg;
    }

}
