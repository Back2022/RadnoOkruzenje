<?php

/**
 *  ROMBOID četverokut kojemu su suprotne stranice međusobno paralelne
 * Specijalni slučaj:
 * Pravokutnik (2 razlicite stranice, kut izmedju !=90)
 * Romb (2 iste stranice, kut izmedju !=90)
 * Kvadrat (2 iste stranice, kut izmedju ==90)
 * 
 * 
 * @author Korisnik
 */
class Romboid extends Trokut {

    private Point3d $d;

    public function __construct(Point3d $a, Point3d $b, Point3d $c) {
        parent::__construct($a, $b, $c);
    }

    public function povrsina() {
        $this->S = 2 * parent::povrsina();
        return $this->S;
    }
    public function opseg() {
        $this->opseg=
                 2 * ($this->AB->duljina()
                + $this->CA->duljina());
        return $this->opseg;
    }
    public function __toString() {
        $format = "<hr>Romboid je omeđen točkama:<br> %s %s %s "
                . "Površina romboida je:%.2f<br>"
                . "Opseg romboida je:%.2f<br>"
                . " vektori koji opisuju romboid su %s %s %s";
        return sprintf($format
                , $this->a
                , $this->b
                , $this->c
                , $this->povrsina()
                , $this->opseg()
                , $this->AB->getV()
                , $this->BC->getV()
                , $this->CA->getV()
        );
    }

}
