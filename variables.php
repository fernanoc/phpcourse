<html>
<body>
<?php 
    echo '<p>hola mundo</p>';
    $contador="Fernán";
    $floater=1.5;
    $istrue=true;
    $arraycolors= array("azul","morado","verde");
    echo '<br/>'.$contador;
    echo '<br/>'.$floater;
    if ($istrue)
        echo 'verdadero';
    else 
        echo 'falso';
    echo '<br/>'.$arraycolors[1];
    
    //Variables globales y locales
    $global='Global<br>';
    echo $GLOBALS["global"];
    variablesglobales();

    function variablesglobales(){
        $local='Local<br>';
        echo $GLOBALS["global"];
        echo $local;
    }

    //Constantes
    //


?>
</body>
</html>