<?php
require('conexion.php');
//recibe los datos por post
$id = $_POST['id'];
$name = $_POST['name'];
$nivel = $_POST['nivel'];
$sql = "update usuarios set nombre ='".$name."', nivel =".$nivel." where id =".$id; // script sql para actualizar tupla por id

$result = $con->query($sql); // realiza la consulta del script sql a la db 
//var_dump($result);
if($result){ //verifica si la consulta se realizo
    echo "Datos editados correctamente";
    echo '<meta http-equiv="refresh" content="2,URL=../login.php">';
}else{
    echo "error en la consulta";
}

$con->close();

?>