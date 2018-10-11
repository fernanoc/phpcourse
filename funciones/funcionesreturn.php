<?php

//Retornar valores en una funcion
function resta($num){
    return $num-10;
}

echo resta(40);

//Valores predeterminados
//La función respeta el valor enviado o
//sino coloca el valor por defecto.

function hacer_cafe($tipo="Capuchino"){     
    return "<br>El cafe es de tipo $tipo";  //Si se requiere devoler más de un valor se debe usar ARRAY
}

echo "<br>".hacer_cafe("Cafeinoso");
echo "<br>".hacer_cafe();

//OJO: cuando se coloca más de un argumento de entrada siempre se leen de
//izquierda a derecha, por lo cual si se omite alguno siempre será el de la derecha


//Recibir múltiples valores
function flores(){
    $flor="clavel";
    $color="Morado";
    $cantidad=10;
    return array($flor,$color,$cantidad);
}
list($fl,$co,$can)=flores();

echo "<br>Hola soy un $fl y mi color es $co y somos $can";

?>