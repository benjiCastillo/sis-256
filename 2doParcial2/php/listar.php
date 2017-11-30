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
    <h2>USUARIO: <?php session_start(); echo $_SESSION['name']; ?></h2>   
    <h1>LISTA DE UNIVERSITARIOS</h1>
<?php

if($_SESSION['nivel'] == 1) echo "<a href='../insetar.html' class='btn blue'>Insertar Universitarios</a><br>";

require('conexion.php'); //llama al archivo que contiene la conexion de base de datos


$sql = 'select * from universitario'; // script sql que lista la tabla universitario
$result = $con->query($sql); // realiza la consulta a db con el script sql
//var_dump($result);
if($result){ // verifica si se realizo la consulta correctamente
    if ($result->num_rows > 0) { //verifica si el numero de filas devuelto por la db es mayor a 0
        //imprime una tabla 
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido</td>";
        echo "<td>CU</td>";
        echo "<td>Edad</td>";
        echo "<td>Editar</td>";
        echo "<td>Eliminar</td>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) { // bucle que itera todas las filas que devolvio la db, en forma de arreglo asociativo
            // impresion de los datos devueltos por la db
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["last_name"]."</td>";
            echo "<td>".$row["cu"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "<td><a class='btn green' href='form-editar.php?id=".$row['id']."'>Editar</td>";
            echo "<td> <a class='btn red' href='eliminar.php?id=".$row["id"]."'>Eliminar</a></td>"; // link que manda el id por GET de cada tupla al arichivo eliminar
            echo "</tr>";
        }
        echo "</table>";
    } else { // en caso que el resultado no contenga datos
        echo "No existen datos";
    }
}else{ // en caso que la consulta  sql haya fallado
    echo "error en la consulta";
}

$con->close(); // cierre de la db   

?>
</body>
</html>
