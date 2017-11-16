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
    
    <title>editar</title>
</head>
<body>
<h1>EDITAR</h1>
<?php
require('conexion.php'); //llama al archivo que contiene la conexion de base de datos
$id = $_GET["id"];
$sql =   'select * from universitario where id='.$id; // script sql que lista la tabla universitario
$result = $con->query($sql); // realiza la consulta a db con el script sql
//var_dump($result);
if($result){ // verifica si se realizo la consulta correctamente
    if ($result->num_rows > 0) { //verifica si el numero de filas devuelto por la db es mayor a 0

        while($row = $result->fetch_assoc()) { // bucle que itera todas las filas que devolvio la db, en forma de arreglo asociativo
 ?>
 <form action="editar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <span>Nombre</span><input type="text" name="name" value="<?php echo $row['name']; ?>" > <br><br>
    <span>apellido</span><input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"> <br><br>
    <span>CU</span><input type="text" name="cu" value="<?php echo $row['cu']; ?>"> <br><br>
    <span>Edad</span><input type="text" name="age" value="<?php echo $row['age']; ?>"> <br><br>
    <input type="submit" value="Editar">
 </form>
 <?php               
        }
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

<?php



?>