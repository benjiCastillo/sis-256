<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Sumar</title>
</head>
<body>
    <?php
       $num1 = $_GET['num1'];
       $num2 = $_GET['num2'];
       
       function suma($n1, $n2){
           return $n1 + $n2;
       }
       echo suma($num1, $num2);
    ?>
</body>
</html>