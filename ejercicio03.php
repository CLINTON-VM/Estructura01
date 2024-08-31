

<?php
 //creen un script para verificar si un número N ingresado 
 //por el usuario es primo o no. 
 ///Un número primo solo es divisible por 1 y por sí mismo.

$b = 20;
$esPrimo = true;

for ($i = 2; $i <= $b / 2; $i++) {
    if ($b % $i == 0) {
        echo "$b no es un número primo.";
        $esPrimo = false;
        break;
    }
}

if ($esPrimo) {
    echo "$b es un número primo.";
}


