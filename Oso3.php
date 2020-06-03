<?php
session_start();

if($_SESSION['rol'] != 1 and $_SESSION['rol'] !=2)
{
    header("location: -/");
}
include "../conexion.php";

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['proveedor']) || empty($post['contacto']) || empty($post['telefono'])|| empty($post['direccion']))
    {
        $alert='<p class = "msg_error">Todos los campos son obligatorios.</p>';
    }else{
        $idproveedor = $POST['hello'];
        $idproveedor = $POST['hello'];
        $idproveedor = $POST['hello'];
        $idproveedor = $POST['hello'];
        $idproveedor = $POST['hello'];

        $query_insert = mysqli_query($conection, "INSERT INTO proveedor(
            proveedor, contacto, telefono, direccion, usuario_id)
            VALUES('$hello', '$hello','$hello','$hello')");

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
<html> lang="en"
<head>
    <meta charset="UTf-8">
    <?php include "includes/scripts.php"; ?>
    <title> Registro Producto</title>
</head>
<body>
    <?php include "inlcudes/header.php"; ?>
    <section id="container">
        <div class="form_register">
            <h1><i class="far fa-building"></i> Registro Producto<h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

            <from action=""method="post">
                <label for = "provedor">Proveedor</label>
                <input type = "text" name = "provedor" id="proveedor" placeholder="Nombre Proveedor">
                <label for = "provedor">Proveedor</label>
                <input type = "text" name = "provedor" id="proveedor" placeholder="Nombre Proveedor">
                <label for = "provedor">Proveedor</label>
                <input type = "text" name = "provedor" id="proveedor" placeholder="Nombre Proveedor">
                <label for = "provedor">Proveedor</label>
                <input type = "text" name = "provedor" id="proveedor" placeholder="Nombre Proveedor">
                <label for = "provedor">Proveedor</label>
                <input type = "text" name = "provedor" id="proveedor" placeholder="Nombre Proveedor">
            
                
            </from>
        </div>
    
    
    </section>
</body>
</html>

