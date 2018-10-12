<?php
declare(strict_types=1); //Activación del modo estricto

//modo coercitivo
function suma(int $a, int $b){
    return $a+$b;
}

var_dump(suma(5,6));

//modo estricto

//var_dump(suma('5',6)); //Genera un error solo cuando se activa el modo estricto

//forzar el tipo de valor de retorno

function multi($a,$b): float{  //Force a que el retorno sea float
    return $a*$b;
}

var_dump(multi(7.6,7));

?>