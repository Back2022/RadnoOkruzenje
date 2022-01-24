<?php
/**
 * Description of Point
 *
 * @author Korisnik
 */


class Point3D extends Point implements Point3DInterface{
    const CONST_VALUE = 'A constant value';
    protected int $z;

    public function __construct(int $x, int $z, int $y = 0, string $name = 'unnamed') {
        parent::__construct($x, $y, $name);
        $this->z = $z;     
    }
    public function __toString() {
       return "Točka $this->name ima koordinate ($this->x, $this->y, $this->z)<br>";
    }
    public function getZ(){
        return $this->z;
    }
    function __destruct() {
        print "<br>Destroying " . __CLASS__ . "\n";
    }

    public function scale(float $factor): Point3D {
        $this->x *= $factor;
        $this->y *= $factor;
        $this->z *= $factor;
        return $this;
    }

}

?>
