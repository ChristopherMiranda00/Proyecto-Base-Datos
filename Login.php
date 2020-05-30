<?php session_start(); ?> 
<html>
<link rel="stylesheet" type="text/css" href="login.css">
<body> 

    <!-- prueba michael  -->
    <td>
    <form action="Somos.php" method="post">
            <button type="submit" name="estado" value='1'><img src="Imagenes/panda.jpg"/>
                <h2>Nombre</h1>
                <h3>Codigo</h2>
                <h2>Precio</h2>
            

            <?php
                $sql= "SELECT * FROM Proyecto.producto where Codigo = 4";
                $result=mysqli_query($conn, $sql);

                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <h2><?php echo $mostrar['Nombre'] ?></h1>
                    <h3><?php echo $mostrar['Codigo'] ?></h2>
                    <h2><?php echo $mostrar['Precio'] ?></h2>
                 <?php
                }   
                ?>
            </button>
            </form>
            </td>

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