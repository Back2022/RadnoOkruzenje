<?php
// This is a wrapper function around echo
function IndianRed()
{
    return '#CD5C5C';
}
function LightCoral()
{
    return '#F01040';
}

$boja = 'IndianRed';
$boja();  // This calls echoIt()



?>

<div style="color:<?=$boja()?>">Ovo je text indijan boje</div>

<?php
$boja = 'LightCoral';
?>

<div style="color:<?=$boja()?>">Ovo je text LightCoral boje</div>
