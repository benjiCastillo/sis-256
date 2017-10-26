<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <title>INSERTAR</title>
</head>
<body>
<h1>INSERTAR UNIVERSITARIO</h1>
<?php
require('conexion.php');

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$cu = $_POST['cu'];
$age = $_POST['age'];

$sql = "insert into universitario(name, last_name, cu, age)
    values('".$name."','".$last_name."','".$cu."',".$age.")
";
// echo $sql;
$result = $con->query($sql);
//var_dump($result);
if($result){
    echo "Datos insertados correctamente";
    echo '<meta http-equiv="refresh" content="2,URL=listar.php">';
}else{
    echo "error en la consulta";
}

$con->close();

?>
</body>
</html>
