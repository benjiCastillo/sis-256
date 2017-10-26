<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <title>LISTAR</title>
</head>
<body>
<h1>LISTA DE UNIVERSITARIOS</h1>
<?php
require('conexion.php');

$sql = 'select * from universitario';
$result = $con->query($sql);
//var_dump($result);
if($result){
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Nombre</td>";
        echo "<td>Apellido</td>";
        echo "<td>CU</td>";
        echo "<td>Edad</td>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["last_name"]."</td>";
            echo "<td>".$row["cu"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "</tr>";
           // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["last_name"]. "<br>";
        }
        echo "</table>";
    } else {
        echo "No existen datos";
    }
}else{
    echo "error en la consulta";
}

$con->close();

?>
</body>
</html>
