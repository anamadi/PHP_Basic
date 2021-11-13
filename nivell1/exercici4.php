<?php
/* Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

El valor de cada variable
La suma
La resta
El producte
El mòdul

Per N i M realitzaràs el mateix.

Per a totes les variables (X, I, N, M)

El doble de cada variable
La suma de totes les variables
El producte de totes les variables */

$x = 9;
$y = 5;
$N = 5.25;
$M = 2.75;

echo "x = $x, y = $y, N = $N, M = $M. <br/>";
echo "$x + $y = ".$x+$y.".</br>";
echo "$x - $y = ".$x-$y.".</br>";
echo "$x * $y = ".$x*$y.".</br>";
echo "$x % $y = ".$x%$y.".</br>";
echo "$N + $M = ".$N+$M.".</br>";
echo "$N - $M = ".$N-$M.".</br>";
echo "$N * $M = ".$N*$M.".</br>";
echo "$N % $M = ".$N%$M.".</br>";
echo "$x * 2 = ".$x*2;
echo ".</br>";
echo "$y * 2 = ".$y*2;
echo ".</br>";
echo "$N * 2 = ".$N*2;
echo ".</br>";
echo "$M * 2 = ".$M*2;
echo ".</br>";
echo "$x + $y + $N + $M = ".$x+$y+$N+$M.".<br/>";
echo "$x * $y * $N * $M = ".$x*$y*$N*$M.".<br/>";
?>