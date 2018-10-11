<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

//funciones y funcion definida en un condicional.
//La funcion del condicional debe definirse antes de poder llamarse

//party(); //Esta línea genera error debido a quue la función no se ha definido

$age=18;
if($age>=18):
    function party(){
        echo "Bienvenido a la fiesta<br>";
    }
endif;

name();
party();

function name(){
    echo "Hola soy una función<br>";
}

//Función dentro de otra función

foo(); //primero se debe llamar foo() para que se pueda llamar bar()
bar();


function foo(){
    function bar(){
        echo "Hola, ya existo como bar<br>";
    }
}


?>
</body>
</html>