<?php 
/* Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.
Afegeix un valor més a l'array que conté 3 integers.
Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
Ara imprimeix per pantalla l'array resultant valor a valor. */
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$array1 = array(3,65,12,9,22);
$array2 = array(2,6,8);
$array2[3] = 10;

$arrayTotal = array_merge($array1,$array2);
echo "Tamaño del nuevo array: ";
echo count($arrayTotal)."<br/>";

echo "Elementos del array<br/>";
for($i=0;$i<count($arrayTotal);$i++)
{
    echo $arrayTotal[$i]."<br/>";
}
?>   
