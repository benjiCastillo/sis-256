<?php
$materias = array("SIS100", "SIS256", "SIS104");
echo "Mis materias " . $materias[0] . ", " . $materias[1] . " and " . $materias[2] . ".";
echo count($materias);

//array asociativo
$Personas = array(["nombre"=>"Benji", "edad"=>"22", "fechaNacimiento"=>"1995-01-05"],
["nombre"=>"Erwin", "edad"=>"22", "fechaNacimiento"=>"1995-05-10"]);
echo "Nombre ".$Personas[0]['nombre'].", edad ".$Personas[0]['edad'].", fecha de nacimiento ".$Personas[0]['fechaNacimiento']."<br>";
echo "Nombre ".$Personas[1]['nombre'].", edad ".$Personas[1]['edad'].", fecha de nacimiento ".$Personas[1]['fechaNacimiento']."<br>";

?>