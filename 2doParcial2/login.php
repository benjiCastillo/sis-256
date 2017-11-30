<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu db | Universidad</title>
      <!-- etilos css de materialize http://materializecss.com/  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
   -->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
</head>

<body>
    <h1 class="text-red">Login</h1>
    <center>
        <form action="php/autenticar.php" method="POST">
            <div class="row">
                <div class="input-field col s4">
                  <input id="user" name="user" type="text" class="validate">
                  <label for="user">Usuario</label>
                </div>
            </div>
            <div class="row">    
                <div class="input-field col s4">
                  <input id="pass" type="password" name="pass" class="validate">
                  <label for="pass">Password</label>
                  <br>
                  <input type="submit" class="btn green" value="INGRESAR">
                </div>
                <br>
                
            </div>
        </form> 
    </center>
</body>
</html>