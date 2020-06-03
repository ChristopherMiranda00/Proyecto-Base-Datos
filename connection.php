<?php
        // Datos para conectar a la base de datos.
        $nombreServidor = "127.0.0.1:3306";
        $nombreUsuario = "adminBD";
        $passwordBaseDeDatos = "guardias5522";
        $nombreBaseDeDatos = "ProyectoFinal4";
        // Crear conexión con la base de datos.
        $conn =new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
        if(mysqli_connect_errno()){
            echo 'Conexión Fallida : ', mysqli_connect_errno();
            exit();
        }

?>

