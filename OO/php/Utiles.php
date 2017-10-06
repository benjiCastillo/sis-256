<?php
class Utiles {
    public $cadena, $cadena2;

    function __construct($cad){
        $this->cadena = $cad;
    }

    public function aumentarGuiones($n){
        $cad = $this->cadena;
        $cadArr = str_split($cad);
        for ($j=0; $j<count($cadArr) ; $j++) { 
            echo $cadArr[$j];
        
            for ($i=0; $i <$n ; $i++) { 
                echo "&nbsp;";
            }    
        }
        

    }
    
}

$obj = new Utiles("benji");
$obj->aumentarGuiones(10);


?>