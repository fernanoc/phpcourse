<?php

//Funciones variables
$saludo=function($nombre="no saludo"){
    echo $nombre;
}; //Ojo este punto y coma es importante

echo $saludo()."<br>";

//Funciones anonimas
function salud($salud){
    echo "Soy una variable función $salud";
}

$variable = 'salud'; //nombre de la función "saludo"
$variable("hola");

?>