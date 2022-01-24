<?php

//include "Point.php";
/**
 * Duzina je dio pravca omeđen s dvije točke
 *
 * @author Korisnik
 */
class Duzina implements DuzinaInterface {

    private Point3D $p1;
    private Point3D $p2;
    private float $duljina;
    public array $v;  //smijer pravca je vektor v[x,y,z]
    
// mixed znaci da mozemo poslati bilo koji tip , 
// u ovom slucaju Point ili Point3D
    public function __construct(mixed $p1, mixed $p2) {
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

       // za postavljanje dimenzije vektora
        $this->duljina();
    }
    
    public function __toString():string {
        return "Dužina je pravac omeđen točkama:<hr>$this->p1  $this->p2"
                . " duljina je:" . $this->duljina() . "<br>"
                . " koeficijent pravca je:" . $this->koefPravca() . "<br>"
                . " vektor v=". $this->v['x'] ."i".$this->v['y']."j".$this->v['z']."k";
    }

    public function duljina():float {
        $deltaX = $this->p2->getX() - $this->p1->getX();
        $deltaY = $this->p2->getY() - $this->p1->getY();
        $deltaZ = $this->p2->getZ() - $this->p1->getZ();
        
        $this->v['x']=$deltaX;
        $this->v['y']=$deltaY;
        $this->v['z']=$deltaZ;
        
        // Možemo ručno.....
       // $temp=sqrt(pow($deltaX, 2) + pow($deltaY, 2));
       // return  $this->duljina=sqrt(pow($deltaZ, 2) + pow($temp, 2));
       
        // ILI jednostavno iskoristimo pitagora 3D teorem
       return  $this->duljina=sqrt($deltaX*$deltaX + $deltaY*$deltaY  + $deltaZ*$deltaZ ); 
        
    }

    /**
     * Koeficijent smjera pravca
     * Koeficijent smjera pravca je mjera kojom se opisuje nagib pravca u Kartezijevom ili pravokutnom koordinatnom sustavu.
     * @link https://hr.wikipedia.org/wiki/Koeficijent_smjera_pravca Koeficijent smjera pravca
     */
    public function koefPravca() {
        $deltaX = $this->p2->getX() - $this->p1->getX();
        $deltaY = $this->p2->getY() - $this->p1->getY();
        
        if($deltaX!=0){
            $koef= $deltaY / $deltaX;
            return $koef;
        }
        else return "koef je beskonacan";
        
    }
    public function getV() {
     return "[". $this->v['x'] ."i, ".$this->v['y']."j, ".$this->v['z']."k]";
    }

}
