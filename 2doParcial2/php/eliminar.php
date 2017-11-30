<?php
require('conexion.php');

$id = $_GET['id']; //recibe el id por get
$sql = "delete from universitario where id =".$id; // script sql par elimimar tupla por id
// echo $sql;
$result = $con->query($sql); // realiza la consulta del script sql a la db 
//var_dump($result);
if($result){ //verifica si la consulta se realizo
    echo "Datos eliminados correctamente";
    echo '<meta http-equiv="refresh" content="2,URL=listar.php">';
}else{
    echo "error en la consulta";
}

$con->close();

?>