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
//array multidimensional

$personas=array(
    array("nataly","osorio",30),
    array("fernan","orjuela",36),
    array("adrian","orjuela",36)
);

//obtener un valor
//echo $personas[1][2]."<br>";

for($fila=0;$fila<count($personas);$fila++):
    for($columna=0;$columna<count($personas[$fila]);$columna++):
        echo $personas[$fila][$columna]."<br>";
    endfor;
endfor;


//multidimensional mixto
$barcos=array(
    'A'=>array("nada","nada","nada","nada"),
    'B'=>array("nada","nada","nada","nada"),
    'C'=>array("barco","nada","nada","nada"),
    'D'=>array("nada","nada","nada","nada")
);

foreach($barcos as $clave=>$valor):
    echo "<br>";
    for($indice=0;$indice<count($valor);$indice++):
        echo "&nbsp;Coordenadas -> ".$clave." - ".$indice;
        echo " Valor -> ".$valor[$indice];
    endfor;
endforeach;

?>
</body>
</html>