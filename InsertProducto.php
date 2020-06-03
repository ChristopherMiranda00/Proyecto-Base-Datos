<?php
session_start();
$usuario=" ";
if((isset($_SESSION['username']))){
    $usuario=$_SESSION['username'];
}
require 'connection.php';


    if(empty($_POST["Codigo"]){
        $alert='<p class = "msg_error">Todos los campos son obligatorios.</p>';
    }else{
        $alert='<p class = "msg_error">BIEN.</p>';
        
        $codigo = $_POST['Codigo'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $precio = $_POST['Precio'];
        $tipo = $_POST['Tipo'];
        $disponibilidad = $_POST['Disponibilidad'];
       echo $codigo;
       echo $nombre;
       
    


        $query_insert = mysqli_query($conection, "INSERT INTO PRODUCTO
        (Codigo, Nombre, Descripcion, Precio, Tipo, Disponibilidad)
            VALUES('$codigo', '$nombre','$descripcion','$precio', '$tipo','$disponibilidad')");

        if($query_insert){
            $alert='<p class="msg_save">Proveedor se la come.</p>';
        }else{
            $alert='<p class="msg_save">PrError se la come.</p>';
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
            <h1><i class="far fa-building"></i> Registro Producto<h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

            <from action="InsertProducto.php" method="post">
                <label for = "Codigo">Codigo</label>
                <input type = "text" name = "Codigo" placeholder="codigo" required><br>
                <label for = "Nombre">Nombre</label>
                <input type = "text" name = "Nombre" placeholder="nombre"required><br>
                <label for = "Descripcion">Descripción</label>
                <input type = "text" name = "Descripcion" placeholder="descripción"required><br>
                <label for = "Precio">Precio</label>
                <input type = "text" name = "Precio" placeholder="precio"required><br>
                <label for = "Tipo">Tipo</label>
                <input type = "text" name = "Tipo" placeholder="tipo"required><br>
                <label for = "Disponibilidad">Disponibilidad</label>
                <input type = "text" name = "Disponibilidad" placeholder="disponibilid"required><br><br>
                
                <input type="submit" value="Agregar" name="boton" class="login"> <br><br>
                
                <a class="cancelbtn" href="index.php" target="_self">Cancelar</a> <br><br>
            </from>
        </div>
    
    
    </section>
</body>
</html>

