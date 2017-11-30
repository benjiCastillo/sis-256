<?php
$con = mysqli_connect("localhost","root","","bd_noticias"); // se incia conexion con db, university

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

?>