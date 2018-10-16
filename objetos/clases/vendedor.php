<?php
class Vendedor extends Persona{
    private $codeInterno;
    private $caja;

    public function __construct(){
        $this->codInterno=0;
        $this->caja="";
    }

    public function lluviaEstrellas(){
        $tiempo=parent::fecha(1994)*25;
        echo "<br>Hijo:Tu edad será: ".$tiempo."<br>";

    }
}


?>
