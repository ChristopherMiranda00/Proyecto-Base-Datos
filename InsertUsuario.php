<?php
session_start();
$usuario=" ";
if((isset($_SESSION['username']))){
    $usuario=$_SESSION['username'];
}
require 'connection.php';

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['Codigo']) || empty($post['Nombre']) || empty($post['Descripcion'])|| empty($post['Precio']) || empty($post['Tipo'])|| empty($post['Disponibilidad']))
    {
        $alert='<p class = "msg_error">Todos los campos son obligatorios.</p>';
    }else{
        $codigo = $POST['Codigo'];
        $nombre = $POST['Nombre'];
        $descripcion = $POST['Descripcion'];
        $precio = $POST['Precio'];
        $tipo = $POST['Tipo'];
        $disponibilidad = $POST['Disponibilidad'];

        $query_insert = mysqli_query($conection, "INSERT INTO PRODUCTO
        (Codigo, Nombre, Descripcion, Precio, Tipo, Disponibilidad)
            VALUES('$codigo', '$nombre','$descripcion','$precio', '$tipo','$disponibilidad')");

        if($query_insert){
            $alert='<p class="msg_save">Proveedor se la come.</p>';
        }else{
            $alert='<p class="msg_save">PrError se la come.</p>';
        }
    }
    mysqli_close($conection);
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

            <from action=""method="post">
                <label for = "ID_Usuario">Usuario</label>
                <input type = "text" name = "ID_Usuario" id="ID_Usuario" placeholder="Usuario"><br>
                <label for = "Password">Contraseña</label>
                <input type = "text" name = "Password" id="Password" placeholder="Contraseña"><br>
                <label for = "Nombre">Nombre</label>
                <input type = "text" name = "Nombrer" id="Nombre" placeholder="Nombre"><br>
                <label for = "Apellido">Apellido</label>
                <input type = "text" name = "Apellido" id="Apellido" placeholder="Apellido"><br> 
                <label for = "Mail">Correo</label>
                <input type = "text" name = "Mail" id="Mail" placeholder="Correo Electrónico"><br> 
                <label for="direc"><b>Dirección</b></label>
                <input type="text" placeholder="Ingrese su Dirección" name="direc" required><br>
                <label for="telefono"><b>Telefono</b></label>
                <input type="tel" placeholder="Ingrese Telefono" name="telefono" required><br>
                <label for="fecha"><b>Fecha de nacimiento</b></label>
                <input type="text" name="fecha" placeholder="YYYY-MM-DD"><br>
                
                <a class="cancelbtn" href="" target="_self">Agregar</a> <br>

                <a class="cancelbtn" href="index.php" target="_self">Cancelar</a> <br><br>
            </from>
        </div>
    
    
    </section>
</body>
</html>

