<?php
require('conexion.php');

$id = $_POST['id'];
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$cu = $_POST['cu'];
$age = $_POST['age']; //recibe el id por get
$sql = "update universitario set name ='".$name."', last_name ='".$last_name."', cu='".$cu."',  age=".$age." where id =".$id; // script sql par elimimar tupla por id
 //echo $sql;
$result = $con->query($sql); // realiza la consulta del script sql a la db 
//var_dump($result);
if($result){ //verifica si la consulta se realizo
    echo "Datos editados correctamente";
    echo '<meta http-equiv="refresh" content="2,URL=listar.php">';
}else{
    echo "error en la consulta";
}

$con->close();

?>