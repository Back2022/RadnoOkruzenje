<?php

/**
 * Lik dio ravnine omeđen krivuljom/ljama, trokut, kvadrat, krug, poligon 
 *
 * @author Korisnik
 */
abstract class Lik {
   // private $S;  //surface
   public abstract function povrsina();
   public abstract function opseg();   
}
