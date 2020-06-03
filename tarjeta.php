<?php
session_start();
  if (!isset($_SESSION['username'])) {
    header("location: ../Proyecto-Base-Datos/Newuser.php");
  }
  require 'connection.php';
     if(!empty($_POST['nombre'])){
       $num =($_POST['num']);
        $fecha =($_POST['fecha']);
        $ccv =($_POST['ccv']);
        $nombre =($_POST['nombre']);
        $usr=$_SESSION['username'];
        echo $num;
         echo" ";
        echo $fecha ;
         echo" ";
        echo $ccv ;
         echo" ";
        echo $nombre ;
         
         $registro="INSERT INTO `ProyectoFinal4`.`Tarjeta` (`Usuario_Tarjeta`, `No_Tarjeta`, `Nombre_Tarjeta`, `Fecha_Expiracion`, `CVV`) VALUES (? , ?, ?, ?, ?);";
         
         $sentencia= mysqli_prepare($conn,$registro);
         mysqli_stmt_bind_param($sentencia,'sssss',$usr,$num,$nombre,$fecha,$ccv);
         $pass=mysqli_stmt_execute($sentencia);
         if($pass){
              header("location: ../Proyecto-Base-Datos/carrito.php");
         }
     }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>H&B Tarjeta</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"><link rel="stylesheet" href="./tarjeta.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="col1">
    <div class="card">
      <div class="front">
        <div class="type">
          <img class="bankid"/>
        </div>
        <span class="chip"></span>
        <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
        <div class="date"><span class="date_value">MM / YYYY</span></div>
        <span class="fullname">NOMBRE</span>
      </div>
      <div class="back">
        <div class="magnetic"></div>
        <div class="bar"></div>
        <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
        <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
      </div>
    </div>
  </div>
  <div class="col2">
      <form action="tarjeta.php" method="post">
    <label>Número de Tarjeta</label>
    <input class="number" type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'name="num" required/>
    <label>Nombre del Titular</label>
    <input class="inputname" type="text" placeholder="" name="nombre" required/>
    <label>Fecha de Expiración</label>
    <input class="expire" type="text" placeholder="MM / YYYY" name="fecha"required/>
    <label>Código de Seguridad</label>
    <input class="ccv" type="text" placeholder="CCV" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'name="ccv"required/>
    <button type="submit"class="buy"><i class="material-icons">lock</i> Confirmar</button>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script><script  src="./tarjeta.js"></script>

</body>
</html>
