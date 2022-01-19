<?php
/**
 * Description of Point
 *
 * @author Korisnik
 */


class Point {
    protected int $x;
    protected int $y;
    protected $name;

    public function __construct(int $x, int $y = 0, string $name='unnamed') {
        $this->x = $x;
        $this->y = $y;
        $this->name = $name;        
        
    }
    public function __toString() {
       return "Točka $this->name ima koordinate ($this->x, $this->y)<br>";
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }  
    function __destruct() {
        print "<br>Destroying " . __CLASS__ . "\n";
    }
}

?>
