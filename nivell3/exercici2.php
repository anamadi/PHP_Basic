<?php
/* Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array. */

$valor = 8;
$arrayRepeticiones = array(2,8,7,8,4,8,9,8);
$repeticiones = 0;

for($i=0; $i < count($arrayRepeticiones); $i++)
{
    if($arrayRepeticiones[$i] == $valor)
    {
        $repeticiones++;
    }
}

var_dump($arrayRepeticiones);
echo "<br/>El valor $valor se repite en el array $repeticiones veces.<br/>";

?>