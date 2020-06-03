<http>
  <?php
session_start();
  if (!isset($_SESSION['username'])) {
    header("location: Login.php");
  }
    if(isset($_POST["sesion"])){
        session_destroy();
        header("location: Login.php");
    }
require 'connection.php';
    $user=$_SESSION['username'];
    //$user='maikol';
    $sql=mysqli_query($conn,"select ID_Usuario,Nombre,Apellido,Mail, Direccion, Telefono, Fecha_nacimiento from Usuario where ID_Usuario='$user';");
    $data=mysqli_fetch_array($sql);
    $nombre=$data["Nombre"];
    $apellido=$data["Apellido"];
    $mail=$data["Mail"];
    $direccion=$data["Direccion"];
    $telefono=$data["Telefono"];
    $fecha=$data["Fecha_nacimiento"];
  ?>
  <head lang="en">
    <meta charset="UTF-8">
    <title>H&B/Newuser</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="code.css">
  </head>
  <body>
      <br><h1 align="center">Datos Personales</h1><br>
  <div  id="marco">

        <label for="nombre"><b>Nombre:</b></label>
        <label for="n"><?php echo $nombre;?></label><br>

        <label for="apellido"><b>Apellido:</b></label>
        <label for="a"><?php echo $apellido;?></label><br>

        <label for="mail"><b>Mail:</b></label>
        <label for="m"><?php echo $mail;?></label><br>

        <label for="direc"><b>Dirección: </b></label>
        <label for="d"><?php echo $direccion;?></label><br>

        <label for="telefono"><b>Telefono:</b></label>
        <label for="t"><?php echo $telefono;?></label><br>
        

    <!--<label for="bday"><b>Fecha de Nacimiento</b></label>
    <input type="date" placeholder="Ingrese su fecha de nacimiento" name="dbay" required><br><br>-->
        <label for="fecha"><b>Fecha de nacimiento</b></label>
        <label for="f"><?php echo $fecha;?><br></label><br>

        
        <a class="back" href="index.php" >Volver</a> <br><br>
        <form name="registro" action="Cuenta.php" method="post">
        <input class="loge" type="Submit" name="sesion" value="Cerrar Sesión"><br><br>
        </form>
  </div>
  </body>
</http>