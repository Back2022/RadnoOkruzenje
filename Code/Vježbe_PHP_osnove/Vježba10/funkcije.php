<?php

// Deklariranje funkcije
/**
 * Funkcija koja vraća nekakav text
 * <p>Iz parametra uzima text <code>String ulaz</code></p>
 * @param string $format <p>Format accepted by <code>DateTimeInterface::format()</code>.</p>
 * @link https://github.com/Back2022/RadnoOkruzenje/blob/main/Code/Vje%C5%BEbe_PHP_osnove/Vje%C5%BEba10/funkcije.php
 * @author PMrvic <predrag.mrvic@algebra.hr>
 * @return string
 * @example function imeFunkcije($var1=defaultVal):povratniTip{function body; return povratniTip;}
 */
function returnText($inputtext='default'): string {  
    return 'Vraćeni tekst iz funkcije je '.$inputtext.'<br>';
}

// Dodjeljivanje vrijednosti iz funkcije varijabli
$funcText = returnText();
// Ispis vrijednosti varijable
echo $funcText;

for ($i = 1; $i <= 10; $i++) {
    echo $i . ") " . returnText();
    echo returnText($inputtext='ulaz');
}

?>