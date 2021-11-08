<?php
/* Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.
 */
$x = array (10, 20, 30, 40, 50);

var_dump($x);
unset($x[3]);
var_dump($x);
?>