<?php
class Persona{
    private $nombre;
    private $apellido;
    public static $miStatic=2017;

    public function __construct(){
        $this->nombre="";
        $this->apellido="";
    }
    public function __set($propiedad,$valor){
        $this->propiedad=$valor;
    }
    public function __get($propiedad){
        return $this->propiedad;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre():string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido():string
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function obtenerEdad($f){
        echo "Padre: Tú edad es: ".$this->fecha($f)."<br>";
    }

    public function fecha($f){
        return self::$miStatic-$f;
    }

    public function __destruct(){
        echo "<br>Padre: Se murio<br>";
    }
}


?>