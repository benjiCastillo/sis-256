<!DOCTYPE html>
<html>
<head>
	<title>Arreglos php</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Ejemplos de Arreglos</h1>
<?php
//arreglos normales
$Persona = array("Benji",22,"1995-01-05");
echo "Nombre <span class='name'>".$Persona[0]."</span><br>"; 
$semana = array("Lunes","Martes");
$peliculas = array("it","los vengadores","titanic","titanes del pacifico");

for ($i=0; $i <count($peliculas) ; $i++){	echo "<div class='cuadrado'>";
	   echo "<center>".$peliculas[$i]."</center>";	
	   echo "</div>"; 

}

//echo "esto es php";

?>

</body>
</html>