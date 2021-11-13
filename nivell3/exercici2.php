<?php
/* Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array. */

$valor = 8;
$arrayRepeticiones = array(2,8,7,8,4,8,9,8);
var_dump($arrayRepeticiones);
$cuenta = array_count_values($arrayRepeticiones);

foreach($cuenta as $numero=>$repeticiones)
{
    if($numero == $valor)
    {
        echo "<br/>El valor $valor se repite en el array $repeticiones veces.<br/>";
    }
}



?>