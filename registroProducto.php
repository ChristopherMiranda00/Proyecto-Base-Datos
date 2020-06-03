<?php 
session_start();
  if (isset($_SESSION['username'])) {
    header("location: ../Proyecto-Base-Datos/Proyecto.php");
  }
require 'connection.php';

  if (!empty($_POST['user']) && !empty($_POST['password'])) {
      $nombre=$_POST['user'];
      $password=$_POST['password'];
      $query=mysqli_query($conn,"SELECT ID_Usuario,Password FROM Usuario where ID_Usuario='".$nombre."' and Password='".$password."' ");
      $nr =mysqli_num_rows($query);
      $mensaje='';
      if($nr==0){
          $mensaje="Los datos son incorrectos";
      }
      else{
          
          $_SESSION['username']=$nombre;
          header("location: ../Proyecto-Base-Datos/Proyecto.php");
          
      }
      
  }


?>
<html>
<link rel="stylesheet" type="text/css" href="login.css">
    <body> 
    <div id="marco">
    <form name="nombre_form" action="Login.php" method="post">
        <div id="Info">
            <label for="uname"><b>Registrar</b></label><br>
            <a class="btn" href="index.php">Usuario</a><br><br>
            <!-- <a href="index.php" type="submit" class="login"  value="Usuario"></a> -->

            <label for="psw"><b>Registrar</b></label><br>
            <a class="btn" href="index.php">Producto</a><br><br>
            <input type="submit" class="login"  value="Cancelar"><br><br>

        </div>
    </form>
    <div id="marco">  
</body>
</html>