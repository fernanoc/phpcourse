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
$variable="20 hola mundo";
$suma=20.1+$variable;

echo $suma;
echo gettype($suma);

//Forzado de tipo
$nuevoint=(int)$variable;

echo $nuevoint;
echo gettype($nuevoint);


?>

<br>
--------  
</body>
</html>