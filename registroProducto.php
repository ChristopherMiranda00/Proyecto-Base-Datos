<?php 
session_start();
  if (isset($_POST['Cancelar'])) {
      session_destroy();
  }


require 'connection.php';


?>
<html>
<link rel="stylesheet" type="text/css" href="login.css">
    <body> 
    <div id="marco">
    <form name="Cancelar" action="Login.php" method="post">
        <div id="Info">
            <label for="uname"><b>Registrar</b></label><br>
            <a class="btn" href="InsertProducto.php">Producto</a><br><br>
            <!-- <a href="index.php" type="submit" class="login"  value="Usuario"></a> -->

            <label for="psw"><b>Registrar</b></label><br>
            <a class="btn" href="InsertUsuario.php">Usuario</a><br><br>
            <input type="submit" class="login"  value="Cancelar"><br><br>

        </div>
    </form>
    <div id="marco">  
</body>
</html>