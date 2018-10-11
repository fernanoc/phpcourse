<?php

//funciones con argumentos

function suma($num1,$num2){
    $suma=$num1+$num2;
    echo "La suma es $suma <br>";
}

suma(10,65);

//Función con array
sumarray(array(12,30,10,45,45,30));

function sumarray($entrada){
    $suma2=0;
    for($i=0;$i<count($entrada);$i++):
        $suma2=$suma2+intval($entrada[$i]);
    endfor;
    echo "La suma de los números es: $suma2 <br>";
}

//función por referencia
function resta(&$num){
    $num=20-$num;
}

$result=13;
resta($result);

echo "$result<br>";

//Funciones recursivas
//Funciones que se llaman a sí mismas

function recursividad($a){
    if($a<=20){
        echo "$a<br>";
        recursividad($a+1);
    }
}

recursividad(1);
?>