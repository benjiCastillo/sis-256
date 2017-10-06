<?php
class Operaciones{
    public $num1, $n2;

    function __construct($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
    }

    function sumaConstructor(){
        return $this->num1+$this->num2;
    }
    function sumaParametros($numero1, $numero2){
        return $numero1+$numero2;
    }

}
    

?>