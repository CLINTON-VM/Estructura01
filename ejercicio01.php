
<?php
//escribir un script en PHP que sume 
//los primeros N números naturales, 
//donde N es un valor ingresado por el usuario


$n = 5;
$suma = 0;
for ($i=1; $i < $n ; $i++) { 
    # code...
    $suma += $i;
}
echo "La suma es:".$suma;