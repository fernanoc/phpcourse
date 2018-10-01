<html>
<body>
<?php 
//Constantes
const CONSTANTE='Soy una constante<br>';
echo CONSTANTE;
const NUMERO=2340000;
echo NUMERO;
const COLORES=array('azul','verde','amarillo','rojo');
echo '<br>'.COLORES[0];

//Usando Define

define('CIUDAD','<br>Bogotá');
echo CIUDAD;

define('CIUDADES',array('<br>Bogotá','<br>medellín','<br>Cali'));
echo CIUDADES[2].'<br>';
echo PHP_INT_MIN;

//Constantes predefinidas


?>
</body>
</html>