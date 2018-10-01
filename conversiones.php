<<!DOCTYPE html>
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
//Conversión a enteros

//contexto (Genera una advertencia en PHP error)
echo "<br/>";
$variable="20.1 hola mundo";
$suma=20+$variable;
echo $suma;
echo " ".gettype($suma);

//Forzado de tipo
echo "<br/>";
$nuevoint=(int)$variable;
echo $nuevoint;
echo " ".gettype($nuevoint);

//funcion
echo "<br/>";
$funcion=intval($variable);
echo $funcion;
echo " ".gettype($funcion);

//Conversion a números tipo float o double(real) 

//Forzado de tipo
echo "<br/>";
$numReal=(float)$variable;
echo $numReal;
echo " ".gettype($numReal);

//funcion
echo "<br/>";
$funcionReal=floatval($variable);
echo $funcionReal;
echo " ".gettype($funcionReal);

//Conversion a Booleano
//forzado de tipo
echo "<br/>";
$varboolean=(bool)$variable;
$bool=boolval($variable);
echo $varboolean.gettype($varboolean)."<br>";
echo $bool.gettype($bool)."<br>";

//conversion a tipo array

//funcion explode3
echo "<br/>";
$numeros="7,9,3,4,5,900";
$ArraNumeros=explode(",",$numeros,5);
echo $ArraNumeros[0]."<br>";
echo $ArraNumeros[1]."<br>";
echo $ArraNumeros[4]."<br>";

//tipo forzado
echo "<br/>";
$array=(array)$numeros;
echo $array[0];
echo $array[1]; //como solo asigna la posición cero esta linea da error.

//para tener un string

$arrayColores=array('azul','rojo','morado');
$string=implode(" ",$arrayColores);
echo $string;



?>

<br>
--------  
</body>
</html>