<?php session_start(); ?> 
<html>
<link rel="stylesheet" type="text/css" href="login.css">
<body> 
<?php
    // Datos para conectar a la base de datos.
    $nombreServidor = "127.0.0.1";
    $nombreUsuario = "adminBD";
    $passwordBaseDeDatos = "rojo";
    $nombreBaseDeDatos = "Proyecto";
    // Crear conexión con la base de datos.
    $conn =new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
    if($conn)
        echo "conexión exitosa.<br>";
    else
        die("Conexión no exitosa");

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