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
echo "<br>";
//Concatenacion

//comillas dobles
//primera forma
$palabra="Código";
$union=$palabra." Facilito";
echo $union."<br>";

//segunda forma (contracta)
$palabra.=" Facilito2";
echo $palabra."<br>";

//Interpolación: Tiene más rendimiento que la concatenación
//Consiste en imprimirse el valor de la variable y no su nombre

//Forma 1
echo "bienvenido a $palabra. Adios";

//Forma 2: Permite agregar caracteres unidos a la variable
echo "bienvenido a {$palabra}s. Adios";

//Se pueden usar con las comillas dobles se pueden usar los caracteres de escape. Asi:
/*
\n avance de línea
\r retorno de carro
\t tabulador horizontal
\v tabulador vertical
\e escape
\f avance
\\ barra invertida
\$ signo de dólar
\" comillas dobles
\{0-7}{1,3} secuencia de caracteres
\x secuencia de caracteres que coincida con la expresión
\x secuencia que no coincida con la seleccion
*/

//Comillas simples
//No se puede hacer interpolación

echo '<br> $palabra hola';

//concatenación de la misma forma pero sin caracteres de escape.
echo "\n\n";
echo '\n<br> 1hola \n 2hola. Vea el codigo fuente';
echo "\n<br> 3hola \n 4hola. Vea el codigo fuente";

//concatenación de la misma forma pero sin caracteres de escape.
echo "\n\n";
echo 'Mi directorio es D:\\hola';
echo "\n\n";
echo "Mi directorio es D:\\hola";

?>
</body>
</html>