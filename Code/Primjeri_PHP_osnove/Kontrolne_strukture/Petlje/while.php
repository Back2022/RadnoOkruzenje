<?php

$i = 1;
while ($i < 4) {
    echo $i . " ";
    $i++;
}

echo "<hr> Parni brojevi<br>";
$i = 2;
while ($i < 22) {
    echo $i . " ";
    $i += 2;
}

echo "<hr> Neparni brojevi<br>";
$i = 1;
while ($i < 33) {
    echo $i . " ";
    $i += 2;
}

// SSS Start-Stop-Step
echo "<hr> Neparni brojevi 2<br>";
$i = 1;
while ($i < 33) {
    if ($i % 2 == 1) {
        echo $i . " ";
    }
    $i++;
}
echo "<hr> Neparni brojevi 3<br>";
$i = 0;
while ($i < 33) {
    $i++;
    if ($i % 2 == 0) { // ukoliko je broj paran  
        continue;
    }
    echo $i . " ";
}

echo "<hr> Neparni brojevi 4 range(0,33);<br>";

$neparni = range(1, 33, 2);
$neparni = array_reverse($neparni); // okrećem array naopako jer pop uzima zadnji element

while (count($neparni) > 1) {
    echo array_pop($neparni) . " ";
}

echo "<hr> Neparni brojevi 5 range(0,33);<br>";

$neparni = range(33, 1, 2);
while (count($neparni) > 1) {
    echo array_pop($neparni) . " ";
}
?>