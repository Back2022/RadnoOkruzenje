<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
  });


$t1=new Point3D(0,0, 0);
$t2=new Point3D(0,0, 5);
$t3=new Point3D(0,4, 0);
$t4=new Point3D(0,0, 50);

$lik1=new Trokut($t1,$t2,$t3);
echo $lik1;


$lik2=new Krug($t1,$t4);
echo "<hr>Površina kruga je:<br>";
echo $lik2->povrsina();
// povecaj krug:
$lik2->scale(2);
echo "<hr>Površina scaliranog kruga X2 kruga je:<br>";
echo $lik2->povrsina();
// povecaj krug:
$lik2->scale(0.1);
echo "<hr>Površina scaliranog kruga X2 kruga je:<br>";
echo $lik2->povrsina();



echo $lik2;

$lik3=new Krug($t2,$t3);
echo $lik3;

// kreiramo krug s jednom točkom i double radijusom
$lik4=new Krug($t1,2.2);  
echo $lik4;

// kreiramo krug s jednom točkom i int radijusom
$lik5=new Krug($t3,2);  
echo $lik5;


$lik6= new Romboid($t1,$t2,$t3);
echo $lik6;
echo $lik6->definicija();
