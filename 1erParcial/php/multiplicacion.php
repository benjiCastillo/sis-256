<?php
$n = $_POST['n'];
echo $n;
$acum = 1;
for($i=0;$i<$n;$i++){
    $data = $_POST['data'.$i];
    echo $data;
    $acum = $acum * $data;
}
echo "<h1>Resultado: ".$acum."</h1>";


?>