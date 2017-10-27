<?php

$n = $_POST['n'];
$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

echo "<select>";
for($i = 0; $i<6 ; $i++){
    if($i == $n-1){
        echo "<option selected>".$dias[$i]."</option>";
    }else{
        echo "<option>".$dias[$i]."</option>";
    }
}
echo "</select>";


?>