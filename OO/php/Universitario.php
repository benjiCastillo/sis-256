<?php
class Universitario extends Persona{
    public $cu;
    function __construct($nom, $ed, $sexo, $fNac,$cu){
        parent::__construct($nom, $ed, $sexo, $fNac);
        $this->cu = $cu;
    }
}

?>