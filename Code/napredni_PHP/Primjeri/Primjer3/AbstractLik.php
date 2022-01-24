<?php

/**
 * Lik dio ravnine omeđen krivuljom/ljama, trokut, kvadrat, krug, poligon 
 *
 * @author Korisnik
 */
abstract class AbstractLik {
// lik je opisan s minimalno tri točke!
    protected Point3d $a;
    protected Point3d $b;
    protected Point3d $c;

    public abstract function povrsina();

    public abstract function opseg();

    public function definicija() {
        return "<br><span style='color:red'>Lik dio ravnine omeđen krivuljom/ljama"
                . ", trokut, kvadrat, krug, poligon </span>";
    }

}
