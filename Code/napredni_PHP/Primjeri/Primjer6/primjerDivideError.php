<?php
/**
 * If you want to try/catch a warning, 
 * you have to 'convert' the warning into a exception.
 */
set_error_handler( 'error_handler' );
function error_handler( $errno, $errmsg, $filename, $linenum, $vars )
  {
    // error was suppressed with the @-operator
    if ( 0 === error_reporting() )
      return false;

    if ( $errno !== E_ERROR )
      throw new \ErrorException( sprintf('%s: %s', $errno, $errmsg ), 0, $errno, $filename, $linenum );

}

try {
    echo 1/0;
}
catch(ErrorException $e){
    echo "got $e";
}
catch(DivisionByZeroError $e){
    echo " NE MOZE SE DIJELITI S NULOM got $e";
}
///////////////////////////
echo "<hr>";
try {
    $polje =[154,1,21,215,151,0,51,21];
$calendar=$polje[785];
} 
catch (OutOfRangeException $exc) {
    echo $exc->getTraceAsString();
}
catch (Throwable $exc) {
   // echo $exc->getMessage();
    echo $exc->getTraceAsString();
}
//////////////////////////
echo "<hr>";

try {
    echo strpos('sdfvds',"sdfs")/0;
} 
catch (ArgumentCountError $exc) {
    echo "broj parametara ne odgovara metodi 888 ".$exc->getTraceAsString();
}
catch (Throwable $exc) {
    echo "Dogodila se neka generička greška ".$exc->getTraceAsString();
}


