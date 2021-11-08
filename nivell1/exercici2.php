<?php
/* Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després

Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla el string en ordre invers de caràcters.
Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings */

$cadena = "Hello, World!";
$cadena2 = "Aquest és el curs de PHP";
echo "$cadena.</br>";
echo "$cadena en mayúsculas es ".strtoupper($cadena).".</br>";
echo "La longitud de $cadena es ".strlen($cadena).".<br>";
echo "$cadena invertido es ".strrev($cadena).".<br>";
echo "La concatenación de $cadena y $cadena2 es ".$cadena.$cadena2.".</br>";

?>