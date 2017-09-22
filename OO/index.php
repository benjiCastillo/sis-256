<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php | Aux</title>
</head>
<?php
    require('php/Persona.php');
    require('php/Operaciones.php');
    require('php/Universitario.php');
    $ope1 = new Operaciones(2,5); 
    $uni1 = new Universitario("Benji",22,"M","1995-01-05","35-36-45");
?>
<body>
    <h1><?php echo $Persona1->nombre; ?></h1>
    <h1><?php echo $ope1->sumaConstructor(); ?></h1>
    <h1><?php echo $ope1->sumaParametros(2,8); ?></h1>
    <h1>Nombre: <?php echo $uni1->getName(); ?> Cu:  <?php echo $uni1->cu; ?></h1>

</body>
</html>