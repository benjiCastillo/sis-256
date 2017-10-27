<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$n = $_POST["n"];

echo "<form method='POST' action='multiplicacion.php'>";

for($i=0; $i<$n; $i++){
    echo "<span>Dato".$i." : <span>";
    echo "<input type='number' name='data".$i."' value='".$i."'><br>";
}
echo "<input type='hidden' value='".$n."' name='n'><br>";
echo "<input type='submit' value='enviar' >";
echo "</form>";
?>


</body>
</html>