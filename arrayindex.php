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
//Array indexado y asociativo
//nada
echo "Array indexado y <br> asociativo<br>";
$color="morado";
//numerico indexado
$arrayIndexado=array(1,2,"hola",$color,$color);

//obtener el valor
echo $arrayIndexado[3]."<br>";

//todos los valores
for($i=0;$i<count($arrayIndexado);$i++):
    echo $arrayIndexado[$i]."<br>";
endfor;

$arrayIndexado[3]="verde";
//todos los valores
for($i=0;$i<count($arrayIndexado);$i++):
    echo $arrayIndexado[$i]."<br>";
endfor;

//Array asociativo
$arrayasociativo=array('nombre'=>'morado','saludo'=>'hola');

echo $arrayasociativo['saludo']."<br>";

foreach($arrayasociativo as $clave=>$valor):
    echo "Clave:$clave<br>&nbsp;Valor:$valor <br>";
endforeach;

?>    
</body>
</html>

