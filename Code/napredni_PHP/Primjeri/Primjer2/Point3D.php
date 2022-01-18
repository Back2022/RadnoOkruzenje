<?php
/**
 * Description of Point
 *
 * @author Korisnik
 */


class Point3D extends Point{
    const CONST_VALUE = 'A constant value';
    protected int $z;

    public function __construct(int $x, int $y = 0, int $z, string $name='unnamed') {
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
}

?>
