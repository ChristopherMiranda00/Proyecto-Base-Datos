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
    if(empty($_POST['Codigo']) || empty($post['Nombre']) || empty($post['Descripcion'])|| empty($post['Precio']) || empty($post['Disponibilidad']))
    {
        $alert='<p class = "msg_error">Todos los campos son obligatorios.</p>';
    }else{
        $codigo = $POST['Codigo'];
        $nombre = $POST['Nombre'];
        $descripcion = $POST['Descripcion'];
        $descripcion = $POST['Precio'];
        $disponibilidad = $POST['Disponibilidad'];

        $query_insert = mysqli_query($conection, "INSERT INTO producto(
            Codigo, Nombre, Descripcion, Precio, Disponibilidad)
            VALUES('$codigo', '$nombre','$descripcion','$descripcion','$disponibilidad')");

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
            <h1><i class="far fa-building"></i> Registro Producto<h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

            <from action=""method="post">
                <label for = "Codigo">Codigo</label>
                <input type = "num" name = "Codigo" id="Codigo" placeholder="codigo"><br>
                <label for = "Nombre">Nombre</label>
                <input type = "text" name = "Nombrer" id="Nombre" placeholder="nombre"><br>
                <label for = "Descripcion">Descripción</label>
                <input type = "text" name = "Descripcion" id="Descripcion" placeholder="descripción"><br>
                <label for = "Precio">Precio</label>
                <input type = "num" name = "Precio" id="Precio" placeholder="precio"><br>
                <label for = "Disponibilidad">Disponibilidad</label>
                <input type = "num" name = "Disponibilidad" id="Disponibilidad" placeholder="disponibilidad"><br><br>
            
                
                <a class="cancelbtn" href="" target="_self">Agregar</a> <br>

                <a class="cancelbtn" href="index.php" target="_self">Cancelar</a> <br><br>
            </from>
        </div>
    
    
    </section>
</body>
</html>

