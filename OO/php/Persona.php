<?php

class Persona {
    
    public $nombre;
    public $edad;
    public $sexo;
    public $fechaNacimiento;

    function __construct($nom, $ed, $sexo, $fNac){
        $this->nombre = $nom;
        $this->edad = $ed;
        $this->sexo = $sexo;
        $this->fechaNacimiento = $fNac; 

    }
    function getName(){
        return $this->nombre;
    }

}

$Persona1 = new Persona("Benji",22,"M","1995-01-05");
echo $Persona1->nombre;

?>