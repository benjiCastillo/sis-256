<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- estilos materialize, solo funciona si se tiene conexion a internet, no es indispensable -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> 
    javascript de materialize para los efectos y funcionaliza, no es indispensable -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
     -->
    <title>editar</title>
</head>
<body>

<?php
require('conexion.php'); //llama al archivo que contiene la conexion de base de datos // script que obtiene la tupla del universitario por su id
session_start();
?>
<h1>Datos</h1>
<h3>Nombre:<?php echo $_SESSION['name'];  ?> &nbsp;&nbsp;&nbsp; Nivel <?php echo $_SESSION['nivel']; ?></h3>
<?php if($_SESSION['nivel'] == 1){ ?>
<div class="container">
   <div class="row">
      <div class="col m4">
      <h1 class="blue-text">EDITAR</h1>
        <form action="editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
            <span>Nombre</span><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" > <br><br>
            <span>Nivel</span><input type="number" name="nivel" value="<?php echo $_SESSION['nivel']; ?>"> <br><br>
            <input type="submit" class="btn cyan" value="Editar">
        </form>
      </div>        
   </div>
</div>
<?php }?>

</body>
</html>

<?php



?>