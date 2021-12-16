<?php
// This is a wrapper function around echo
function echoIt($string)
{
    echo $string;
}
function reverseIt($string)
{
    echo strrev($string);
}

$func = 'echoIt';
$func('test');  // This calls echoIt()


$func = 'reverseIt';
$func('test');  // This calls echoIt()
?>