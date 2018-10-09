<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Operadores de comparación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
//Operadores de comparación

//Operador Igual ==
$numero1=13;
$numero2="13";
echo "hola soy el operador igual == \n";
var_dump($numero1==$numero2);

//operador idéntico (Evalua tambien si el tipo es el mismo)
$numero1=13;
$numero2="13";
echo "\n hola soy el operador idéntico === \n";
var_dump($numero1===$numero2);

//operador diferencia
$numero1=13;
$numero2="13";

echo "\n hola soy el operador diferente != o <> \n";
var_dump($numero1!=$numero2);

//operador no idéntico (Evalua que sea valor distinto o tipo distinto)
$numero1=13;
$numero2="13";
echo "\n hola soy el operador diferente !== \n";
var_dump($numero1!==$numero2);

//operador mayor que o menor que ...
$a=14;
$b="13";
echo "\n hola soy el operador mayor que > \n";
var_dump($a>$b);


//operador nave espacial
$a=14;
$b=13;
$c=13;
echo "\n hola soy el operador nave espacial <=> \n";
var_dump($a<=>$b);
var_dump($b<=>$a);
var_dump($b<=>$c); 

//operador de elvis
$resultado=true;
echo "\n hola soy el operador de elvis ?: \n";
var_dump($resultado?:'no hay datos'); 
$resultado=0;
var_dump($resultado?:'no hay datos');

//operador ternario
$resultado=true;
echo "\n hola soy el operador de ternario ? \n";
var_dump($resultado?'no hay datos':'si hay datos'); 
$resultado=0;
var_dump($resultado?'no hay datos':'si hay datos'); 

//operador de fusión null
$resultado=15;
echo "\n hola soy el operador de fusión null ?? \n";
var_dump($resultado??'no hay datos'); 
$resultado=0;
var_dump($resultado??'no hay datos'); 
var_dump(isset($resultadootro)??'no hay datos');
//Tener en cuenta que el isset es util en el elvis y el ternatio.
//En fusión null no pasa nada si no se pone
var_dump($resultadootro??'no hay datos');



?>
</body>
</html>