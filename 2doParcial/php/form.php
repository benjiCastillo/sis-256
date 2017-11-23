<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
</head>
<body>
    
<?php
 $n = $_POST['n'];
 $name = "number";
   
 for($i = 0; $i<$n; $i++){
     echo "<input type='number' id='".$name.$i."'> <br>";
 }
 echo "<button onclick='sumar($n)'>Sumar</button>";
?>

</body>
<script>
    function sumar(n){
        var sum = 0;
        for(var i = 0; i<n; i++){
            sum += parseInt(document.getElementById('number'+i).value);
        }
        alert(sum);
    }
</script>
</html>