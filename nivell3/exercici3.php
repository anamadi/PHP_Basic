<?php
/* Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.
 */
$x = array (10, 20, 30, 40, 50);

echo "Array original:<br/>";
var_dump($x);
unset($x[3]);
echo "<br/>Elimino el elemento 40: <br/>";
var_dump($x);
$y = array_splice($x,0,4);
echo "<br/>Array con index ordenados: <br/>";
var_dump($y);
?>