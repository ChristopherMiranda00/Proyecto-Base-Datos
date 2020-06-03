<?php
session_start();
$usuario=" ";
$as=false;
if((isset($_SESSION['username']))){
    $usuario=$_SESSION['username'];
}
else header("Location: Login.php");
require 'connection.php';
if(!empty($_POST["salir"])){
    header("Location: Login.php");
}
if(!empty($_POST["pagar"])){
    $query=mysqli_query($conn,"select * from Tarjeta where Usuario_Tarjeta = '$usuario';");
    $result=mysqli_num_rows($query);
    if($result>0){
        echo "YASTAS";
        $sentencia=mysqli_query($conn,"select sum(Precio) as Total from Carrito_has_Producto inner join Producto where (Codigo=Codigo_Producto  and Usuario_ID_Usuario ='$usuario');");
        $data2=mysqli_fetch_array($sentencia);
        $total=$data2["Total"];
        $query=mysqli_query($conn,"select Cantidad,Codigo,Nombre,Usuario_ID_Usuario,Precio,Descripcion from Carrito_has_Producto inner join Producto on (Codigo=Codigo_Producto and Usuario_ID_Usuario ='$usuario');");
        while($carro=mysqli_fetch_array($query)){
            $cod=$carro["Codigo"];
            $can=$carro["Cantidad"];
            $as=mysqli_query($conn,"INSERT INTO `id13938824_basedatos`.`Producto_has_Venta` (`Codigo_Producto`,  `Num_venta`, `Cantidad`, `Total`, `Codigo_Carrito`) VALUES ($cod, 1, $can,$total,'$usuario');");
               
        }
        if($as){
            echo "YASTAS";
                $ne=mysqli_query($conn,"delete from `id13938824_basedatos`.`Carrito_has_Producto` where (Usuario_ID_Usuario = '$usuario');");
            }
  
    }
    else{
        header("Location: tarjeta.php");
    }
}


?>
<!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>H&B</title>
        <link rel="stylesheet" type="text/css" href="code.css">
    </head>
    <body>
    <div class="cabecera" >   
        <table align="center"> 
            <tr>
            <td><a class="botonlogo" href="index.php" target="_self">H&B </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
            <td><a class="botoncuenta" href="Login.php" target="_self">Mi Cuenta▾</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><a class="botoncarrito" href="Carrito.php" target="_self"></a><img src="Imagenes/Carrito.png" width="45px"> </td>
            </tr>
            
        </table>
    </div><!-- fincabecera-->
    


    <div class="anuncio">  <!-- incio anuncio--> 
        <?php echo "<h1>Bienvenido $usuario </h1>";?>
        <h1><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carrito</a></h1>
    </div><!-- fin anuncio-->

    <div id="contenido">  <!-- incio contenido-->      
        <table align="center" class="productostabla" name="Tabla">
            <tr >
                <th >Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio MX$</th>
                <th>Foto</th>
                <th>Cantidad</th>
                
                
            </tr>
    <?php
        $consulta=mysqli_query($conn,"select Cantidad,Codigo,Nombre,Foto,Precio,Descripcion from Carrito_has_Producto inner join Producto on (Codigo=Codigo_Producto and Usuario_ID_Usuario ='$usuario');");
        $result =mysqli_num_rows($consulta);
        $sentencia=mysqli_query($conn,"select sum(Precio) as Total from Carrito_has_Producto inner join Producto where (Codigo=Codigo_Producto  and Usuario_ID_Usuario ='$usuario');");
        $data2=mysqli_fetch_array($sentencia);
        $total=$data2["Total"];
        if($result >0){
            while($data=mysqli_fetch_array($consulta)){
                if($data["Foto"]!='Imagen_producto.jpg'){
                    $foto='Imagenes/'.$data["Foto"];
                }
                ?>
            <tr class="productostr">
                <td ><?php echo $data["Codigo"]?></td>
                <td><?php echo $data["Nombre"]?></td>
                <td><?php echo $data["Descripcion"]?></td>
                <td><?php echo $data["Precio"]?></td>
                <td class="product_img"><img src="<?php echo $foto; ?>" alt="<?php echo $data["Descripcion"]?>"></td>
                <td><?php echo $data["Cantidad"]?></td>
            </tr> 
            <?php
            }
            
        }
            ?>
        </table>
        <h1>Total: $<?php echo $total;?></h1>
        <form action="carrito.php" method="post">
            <table align="center"> 
                <tr>
                <td><input type="submit" class="return" name="salir"  value="Regresar"><br><br>   
                <td><input type="submit" class="login" name="pagar"  value="Pagar"><br><br> 
                </tr>
            </table>
            
        </form>
    </div><!-- fin contenido-->


    <div class = "casipie"><!-- incio casipie-->
        <table align="center" CELLSPACING="5" >
            <tr>
                <th scope="col"><h1>Desarrolladores</h1></th>
                <th scope="col"><h1>Contacto</h1></th>
                <th scope="col"><h1>Conócenos</h1></th>
                <th scope="col"><h1>Ayúda</h1></th>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HandB@outlook.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="botoncontacto" href="Somos.php" target="_self">¿Quiénes Somos? </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¿Cómo comprar?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><a class="botoncontacto" href="https://www.instagram.com/rojito22/" target="_blank">Abraham García </a></td>
                <td>A01023256@itesm.mx</td>
                <td>¿Qué es esto?</td>
                <td>55-43-92-14-55</td>
            </tr>
            <tr>
                <td><a class="botoncontacto" href="https://www.instagram.com/chris_mirvan/" target="_blank">Chistopher Miranda </a></td>
                <td>A01022676@itesm.mx</td>
                <td>Métodos de Pago</td>
                <td>Preguntas Frecuentes</td>
            </tr>
            <tr>
                <td><a class="botoncontacto" href="https://www.instagram.com/miguel77hm/" target="_blank">Miguel Hernández </a></td>
                <td>A01022398@itesm.mx</td>
                <td>Dudas y Sugerencias</td>
                <td></td>
            </tr>
        </table>   
    </div><!-- fin casipie-->

    <div class="pie"><!-- incio pie-->
        <p>Politicas de Privacidad | Términos de uso
        <p>Copyright © 2020 H&B </p>
    </div><!-- fin pie -->

    
    </body> 
    </html> 