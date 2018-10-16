<?php
//Programación orientada a objetos
//incluir archivo de clase
//include  //Genera una advertencia pero continua ejecución si no se encuentra el archivo
//require //Genera un error sino se encuentra
//include_once //once: procesa una unica vez la inclusión
require_once 'clases/persona.php';
require_once 'clases/vendedor.php';
$persona1=new Persona();  //Se crea la instancia

$persona1->setNombre("Fernan");
$persona1->setApellido("Orjuela"); 

echo "hola ".$persona1->getNombre()." ".$persona1->getApellido();
echo "<br>".$persona1::$miStatic;
echo "<br>".Persona::$miStatic;

$vendedor=new Vendedor();
$vendedor->lluviaEstrellas();
$vendedor->obtenerEdad(1994);


?>