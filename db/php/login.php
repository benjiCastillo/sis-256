<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- estilos materialize, solo funciona si se tiene conexion a internet, no es indispensable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> 
    <!-- javascript de materialize para los efectos y funcionaliza, no es indispensable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
    <title>LISTAR</title>
</head>
<body>
<!-- <h1>LISTA DE UNIVERSITARIOS</h1>
<a href="../insetar.html" class="btn red">Insertar Universitarios</a><br> -->
<?php
session_start();
require('conexion.php'); //llama al archivo que contiene la conexion de base de datos

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "select * from usuario where user = '".$user."' and password = '".$pass."'"; // script sql que lista la tabla universitario
$result = $con->query($sql); // realiza la consulta a db con el script sql
//var_dump($result);
if($result){ // verifica si se realizo la consulta correctamente
    if ($result->num_rows > 0) { //verifica si el numero de filas devuelto por la db es mayor a 0
        while($row = $result->fetch_assoc()) { // bucle que itera todas las filas que devolvio la db, en forma de arreglo asociativo
            $name = $row['name'];
            $nivel = $row['nivel'];
            $_SESSION['name'] = $name;
            $_SESSION['nivel'] = $nivel;
        }
        //echo $name." ".$nivel;
        echo "<center><h1>Bienvenido, ".$name." : )  <h1></center>";
        echo '<meta http-equiv="refresh" content="2,URL=listar.php">';

    } else { // en caso que el resultado no contenga datos
        echo "<center><h1>Error en la autenticacion : |<h1></center>";
        echo '<meta http-equiv="refresh" content="2,URL=../index.html">';
    }
}else{ // en caso que la consulta  sql haya fallado
    echo "error en la consulta";
}

$con->close(); // cierre de la db   

?>
</body>
</html>
