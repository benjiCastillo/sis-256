<!DOCTYPE html>
<html>
<head>
	<title>Mas arreglos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<h1>Arrays o arreglos associativos</h1>
<?php
$autos = array(
	["marca"=>"mazda","modelo"=>"626","cilindrada"=>"1600cc","color"=>"azul"],
	["marca"=>"toyota","modelo"=>"corolla","cilindrada"=>"1600cc","color"=>"blanco"],
	["marca"=>"subaru","modelo"=>"impresa","cilindrada"=>"2000cc","color"=>"azul"]);
//var_dump($auto);
?>

<?php
for($i=0;count($autos)>$i;$i++){
	echo "<section class='cars'>";
		echo "<p> Marca = ".$autos[$i]["marca"]."</p>";
		echo "<p> Modelo = ".$autos[$i]["modelo"]."</p>";
		echo "<p> Cilindrada =".$autos[$i]["cilindrada"]."</p>";
		echo "<p> Color = ".$autos[$i]["color"]."</p>";
	echo "</section>";
}
?>
</body>
</html>
