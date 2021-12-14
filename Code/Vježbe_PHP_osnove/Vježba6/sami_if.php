<?php

$a=5;
$b=110;
$c=15;

/// grupni if uvijet
if (($b>$a)&& ($b<$c)){
    echo " \$b = $b što je između \$a=$a i \$c=$c";
}
else{
    echo " \$b = $b nije između  a i c";
}

// ugnjezdeni
///////////////////////
echo "<br>";
if ($b>$a){
    if ($b<$c){
        echo " \$b = $b što je između \$a=$a i \$c=$c";
    }
    else{
         echo " b je veci od a ali nije manji od c!";
    }
}
  else{
      echo " b nijje veci od a";
  }
  
  // serijski ili lancani if
  //////////////////////
echo "<br>";
  if ($b > $c) {
    echo " b je veci od c";
} elseif ($b < $a) {
    echo " b nije veci od a";
} else {
    echo " \$b = $b što je između \$a=$a i \$c=$c";
}
