<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}




try {
   //trigger exception
checkNum(2);


} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    echo $exc->getMessage();
}
