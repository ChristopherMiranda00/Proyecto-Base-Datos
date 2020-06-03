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
    <div id="tituloimagen">
        <img src="Imagenes/Fondo.jpg" alt="Avatar" class="avatar">
    </div>
    <?php if (!empty($mensaje)):?>
    <p><?=$mensaje?></p>
    <?php endif;?>
    <form name="nombre_form" action="Login.php" method="post">
    <div id="Info">
        <label for="uname"><b>Usuario</b></label><br>
        <input type="text" placeholder="Ingrese Usuario" id="pass" name="user" required><br>
        
        <label for="psw"><b>Contraseña</b></label><br>
        <input type="password" placeholder="Ingrese contraseña" name="password" required><br>
        <input type="submit" class="login"  value="Login"><br><br>

        <a class="cancelbtn" href="Newuser.php" target="_self">Registrarse</a> <br><br>

        <a class="cancelbtn" href="index.php" target="_self">Cancel</a> <br><br>
    </div>
         </form>
    <div id="marco">
       

    
</body>
</html>