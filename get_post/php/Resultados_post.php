<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
<?php
require 'Operaciones.php';

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
?>
<h1>SUma <?php echo sumaPorGet($num1, $num2); ?></h1>
</body>
</html>