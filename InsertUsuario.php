<?php
session_start();
$usuario=" ";
if((isset($_SESSION['username']))){
    $usuario=$_SESSION['username'];
}
require 'connection.php';

    if(empty($_POST["user"])){
        $alert='<p class = "msg_error">Todos los campos son obligatorios.</p>';
    }else{
        $alert='<p class = "msg_error">BIEN.</p>';

        $idUsuario = $_POST['user'];
        $password = $_POST['pass'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apel'];
        $mail = $_POST['mail'];
        $direc = $_POST['direc'];
        $tel = $_POST['tel'];
        $fecha = $_POST['fecha'];
        echo $idUsuario;
        echo $password;
        echo $nombre;
        echo $apellido;
        echo $mail;
        echo $direc;
        echo $tel;
        echo $fecha;
        $query_insert = mysqli_query($conn,"INSERT INTO `ProyectoFinal4`.`Usuario` (`ID_Usuario`, `Password`, `Nombre`, `Apellido`, `Mail`, `Telefono`, `Fecha_nacimiento`,`Puesto`,`Admin`) VALUES ('$idUsuario ', '$password', '$nombre', '$apellido', '$mail', '$direc', '$tel','$fecha','TI',1)");
        if($query_insert){
            echo "BEN";
        }
        else{
            echo "has";
        }
    }

?>

<!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>H&B</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
    <section id="marco">
        <div id="Info">
            <h1><i class="far fa-building"></i> Registro Usuario<h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

            <form action="InsertUsuario.php" method="post">
                <label for = "ID_Usuario">Usuario</label>
                <input type = "text" name = "user" placeholder="Usuario" required><br>
                <label for = "Password">Contraseña</label>
                <input type = "text" name = "pass" placeholder="Contraseña" required><br>
                <label for = "Nombre">Nombre</label>
                <input type = "text" name = "nombre" placeholder="Nombre" required><br>
                <label for = "Apellido">Apellido</label>
                <input type = "text" name = "apel" placeholder="Apellido" required><br> 
                <label for = "Mail">Correo</label>
                <input type = "text" name = "mail" placeholder="Correo Electrónico" required><br> 
                <label for="Direc"><b>Dirección</b></label>
                <input type="text" placeholder="Ingrese su Dirección" name="direc" required><br>
                <label for="Telefono"><b>Telefono</b></label>
                <input type="tel" placeholder="Ingrese Telefono" name="tel" required><br>
                <label for="Fecha"><b>Fecha de nacimiento</b></label>
                <input type="text" name="fecha" placeholder="YYYY-MM-DD"required><br>
                
                <input type="submit" value="Agregar" name="boton" class="login"> <br><br>
                
                <a class="cancelbtn" href="index.php" target="_self">Cancelar</a> <br><br>
            </form>
        </div>
    
    
    </section>
</body>
</html>

