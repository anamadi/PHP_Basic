<?php
/* Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).
 */

$cadena = "     Hola, soy un nuevo array   ";
$sinEspacios = trim($cadena);
$arrayCadena = [];

for($i = 0; $i < strlen($sinEspacios);$i++)
{
    if($sinEspacios[$i] != " ")
    {
        $arrayCadena[$i] = $sinEspacios[$i];
    }
}

var_dump($arrayCadena)

?>