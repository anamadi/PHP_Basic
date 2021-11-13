<?php
/* Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).
 */
echo "Cadena inicial:<br/>";
$cadena = "     Hola, soy un nuevo array   ";
echo $cadena;

$cadenaLimpia = trim($cadena);
$sinEspacios = str_replace(" ","",$cadenaLimpia);
echo "<br/>Cadena sin espacios:<br/>";
echo $sinEspacios;

echo "<br/>Array de caracteres:<br/>";
$arrayCadena = str_split($sinEspacios);
var_dump($arrayCadena);

?>