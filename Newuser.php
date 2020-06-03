<http>
  <?php
session_start();
  if (isset($_SESSION['username'])) {
    session_destroy();
  }
require 'connection.php';
    
    if (!empty($_POST['telefono'])){
        $mensaje='';
        if($_POST['psw']!=$_POST['pswconfirm']){
            $mensaje="Las contraseñas no coinciden";
        }
        else{
            $nombre =($_POST['nombre']);
            $apellido =($_POST['apellido']);
            $mail =($_POST['mail']);
            $direccion =($_POST['direc']);
            $telefono =($_POST['telefono']);
            $fecha =($_POST['fecha']);
            $user =($_POST['uname']);
            $pass =($_POST['psw']);
            $busqueda= "SELECT * FROM Usuario WHERE ID_Usuario = ?;";
            $sentencia =mysqli_prepare($conn,$busqueda);
            mysqli_stmt_bind_param($sentencia, 's',$user);
            mysqli_stmt_execute($sentencia);
            mysqli_stmt_store_result($sentencia);
            mysqli_stmt_num_rows($sentencia);
            $nr=mysqli_stmt_num_rows($sentencia);
            if($nr>0){
                $mensaje="Nombre de usuario ya existente";
                mysqli_stmt_close($sentencia);
            }
            else{
                echo "aqui";
                mysqli_stmt_close($sentencia);
                $insert= "INSERT INTO `ProyectoFinal4`.`Usuario` (`ID_Usuario`, `Password`, `Nombre`, `Apellido`, `Mail`, `Direccion`, `Telefono`, `Fecha_nacimiento`, `Admin`) VALUES (?, ?, ?, ?, ?, ?, ?, ?,0);";
                $sentencia =mysqli_prepare($conn, $insert);
                mysqli_stmt_bind_param($sentencia, 'ssssssss',$user,$pass,$nombre,$apellido,$mail,$direccion,$telefono,$fecha);
                $verify=mysqli_stmt_execute($sentencia);
                echo $verify;
                if (empty($verify)){
                    $mensaje="ERROR: Verifica el formato de los datos";
                }
                else{
                    header("location: ../Proyecto-Base-Datos/Login.php");
                }
            }
            
            
            
            
            
            
        }
        
        
        
    }
  ?>
  <head lang="en">
    <meta charset="UTF-8">
    <title>H&B/Newuser</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="code.css">
  </head>
  <body>
  <div id="marco">
    <form name="registro" action="Newuser.php" method="post">
        <label for="nombre"><b>Nombre</b></label>
        <input type="text" placeholder="Ingrese Nombre" name="nombre" required><br>

        <label for="apellido"><b>Apellido</b></label>
        <input type="text" placeholder="Ingrese Apellido" name="apellido" required><br>

        <label for="mail"><b>Mail</b></label>
        <input type="email" placeholder="Ingrese Mail" name="mail" required><br>

        <label for="direc"><b>Dirección</b></label>
        <input type="text" placeholder="Ingrese su Dirección" name="direc" required><br>

        <label for="telefono"><b>Telefono</b></label>
        <input type="tel" placeholder="Ingrese Telefono" name="telefono" required><br>


    <!--<label for="bday"><b>Fecha de Nacimiento</b></label>
    <input type="date" placeholder="Ingrese su fecha de nacimiento" name="dbay" required><br><br>-->
        <label for="fecha"><b>Fecha de nacimiento</b></label>
        <input type="text" name="fecha" placeholder="YYYY-MM-DD"><br>

        <label for="uname"><b>Usuario</b></label><br>
        <input type="text" placeholder="Ingrese Usuario" name="uname" required><br>
        <label for="psw"><b>Contraseña</b></label><br>        
        <input type="password" placeholder="Ingrese contraseña" name="psw" required><br>
        <label for="psw"><b>Confirmar Contraseña</b></label><br>        
        <input type="password" placeholder="Confirmar contraseña" name="pswconfirm" required><br><br>
        <input type="submit" value="Registrar" class="login"> <br><br>
        
        <a class="cancelbtn" href="Proyecto2.php" target="_self">Cancelar</a> <br><br>
        <?php if (!empty($mensaje)):?>
            <p><?=$mensaje?></p>
        <?php endif;?>
      </form>
  </div>
      

  
  </body>
</http>