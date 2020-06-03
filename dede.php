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
                $insert= "INSERT INTO `id13938824_basedatos`.`producto` (`Codigo`, `Nombre`, `Dscripcion`, `Precio`, `Tipo`, `Disponibilidad`) VALUES (?, ?, ?, ?, ?, ?);";
                $sentencia =mysqli_prepare($conn, $insert);
                mysqli_stmt_bind_param($sentencia, 'ssssssss',$user,$pass,$nombre,$apellido,$mail,$direccion,$telefono,$fecha);
                $verify=mysqli_stmt_execute($sentencia);
                echo $verify;
                if (empty($verify)){
                    $mensaje="ERROR: Verifica el formato de los datos";
                }
                else{
                    header("location: Login.php");
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
    <form name="registro" action="dede.php" method="post">
        <label for="codigo"><b>Codigo</b></label>
        <input type="num" placeholder="Ingrese codigo" name="codigo" required><br>

        <label for="nombre"><b>Nombre</b></label>
        <input type="text" placeholder="Ingrese nombre" name="nombre" required><br>

        <label for="descripcion"><b>descripcion</b></label>
        <input type="text" placeholder="Ingrese descripcion" name="descripcion" required><br>

        <label for="precio"><b>precio</b></label>
        <input type="num" placeholder="Ingrese precio" name="precio" required><br>

        <label for="tipo"><b>tipo</b></label>
        <input type="text" placeholder="Ingrese tipo" name="tipo" required><br>

        <label for="disponibilidad"><b>disponibilidad</b></label>
        <input type="num" placeholder="Ingrese disponibilidad" name="disponibilidad" required><br>

        <input type="submit" value="Agregar" class="login"> <br><br>
        
        <a class="cancelbtn" href="index.php" target="_self">Cancelar</a> <br><br>
        <?php if (!empty($mensaje)):?>
            <p><?=$mensaje?></p>
        <?php endif;?>
      </form>
  </div>
      

  
  </body>
</http>