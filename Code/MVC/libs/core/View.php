<?php

namespace Core;

use \Core\Route;

class View {

    public function __construct() {
        
    }

    public function render($layout, $views = null, $vars = null) {

        if (isset($vars)) {
         //  var_dump($vars);
            //extract($vars);
          
            extract($vars, EXTR_REFS);
            foreach ($vars as $key => $value) {
                $this->$key = $$key;
            }
             
               /**/
        }

        if (isset($views)) {
            foreach ($views as $view => $contents) {
                if (is_array($view) && !empty($view)) {
                    extract($view);
                }
                ob_start();
                include VIEWS . '/' . $contents . Route::$fileExtention;
                ${$view} = ob_get_clean();
            }
        }

        require VIEWS . '/' . $layout . Route::$fileExtention;
        return $this;
    }

}
