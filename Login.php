<html>

<link rel="stylesheet" type="text/css" href="login.css">
<body> 
<?php
    $enlace = mysqli_connect("127.0.0.1", "adminBD", "rojo", "Proyecto");
    if($enlace)
        echo "Conexión exitosa.<br>";
    else
      
        die("Conexión no exitosa.");
    
?>
<div id="marco">
    <div id="tituloimagen">
        <img src="Imagenes/Fondo.jpg" alt="Avatar" class="avatar">
    </div>

    <div id="Info">
        <label for="uname"><b>Usuario</b></label><br>
        <input type="text" placeholder="Ingrese Usuario" name="uname" required><br>

        <label for="psw"><b>Contraseña</b></label><br>
        <input type="password" placeholder="Ingrese contraseña" name="psw" required><br>

        <button type="submit" class="login">Login</button><br><br>

        <a class="cancelbtn" href="Newuser.php" target="_self">Registrarse</a> <br><br>

        <a class="cancelbtn" href="Proyecto.php" target="_self">Cancel</a> <br><br>
    </div>
    <div id="marco">

    
</body>
</html>