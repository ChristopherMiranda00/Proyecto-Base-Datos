<?php
session_start();
$usuario=" ";
if((isset($_SESSION['username']))){
    $usuario=$_SESSION['username'];
}
if(isset($_POST['peluches']))$filtro="'Peluche'";
else if(isset($_POST['flores']))$filtro="'Flores'";
else if(isset($_POST['dulces']))$filtro="'Golosinas'";
else $filtro="'%%'";
require 'connection.php';
$ordenar="asc"; //VARIABLE QUE SE VA A CAMBIAR PARA ORDENAR LOS ELEMENTOS
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
            <td><a class="botonlogo" href="Proyecto2.php" target="_self">H&B </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
            <td><a class="botoncuenta" href="Login.php" target="_self">Mi Cuenta▾</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><a class="botoncarrito" href="Carrito.php" target="_self"><img src="Imagenes/Carrito.png" width="45px"> 
            </tr>
            
        </table>
    </div><!-- fincabecera-->
    
    <div class="menu" >   <!-- incio menu-->
        <form action="Proyecto2.php" method="post">
            <table align="center"> 
                <tr>
                    <td><input class="botonmenu" type="submit" name="peluches" value="Peluches▾" onclick=""></td>       
                    <td><input class="botonmenu" type="submit"  name= "flores" value="Flores▾" onclick=""></td>  
                    <td><input class="botonmenu" type="submit"  name= "dulces"value="Golosinas▾" onclick=""></td>
                </tr>
            </table>
        </form>
        
        
        

    </div><!-- fin menu-->


    <div class="anuncio">  <!-- incio anuncio--> 
        <?php echo "<h1>Bienvenido $usuario </h1>";?>
        <h1><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lista de productos</a></h1>
    </div><!-- fin anuncio-->
        
        <table align="center" class="productostabla" name="Tabla">
            <tr>
                <th >Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio MX$</th>
                <th>Disponibilidad</th>
                <th>Foto</th>
                
            </tr>
    <?php
        $consulta=mysqli_query($conn,"select Codigo,Nombre,Descripcion,Precio,Disponibilidad,Foto from Producto where Disponibilidad>0 and Tipo like $filtro order by Codigo $ordenar;");
        $result =mysqli_num_rows($consulta);
        if($result >0){
            while($data=mysqli_fetch_array($consulta)){
                if($data["Foto"]!='Imagen_producto.jpg'){
                    $foto='Imagenes/'.$data["Foto"];
                }
                ?>
            <tr class="productostr">
                <td><?php echo $data["Codigo"]?></td>
                <td><?php echo $data["Nombre"]?></td>
                <td><?php echo $data["Descripcion"]?></td>
                <td><?php echo $data["Precio"]?></td>
                <td><?php echo $data["Disponibilidad"]?></td>
                <td class="product_img"><img src="<?php echo $foto; ?>" alt="<?php echo $data["Descripcion"]?>"></td>
            </tr> 
            <?php
            }
            
        }
            ?>
        </table>

    
        


<!-- fin contenido-->


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
                <td><a class="botoncontacto" href="https://www.facebook.com/" target="_blank">Abraham García </a></td>
                <td>A01022398@itesm.mx</td>
                <td>¿Qué es esto?</td>
                <td>55-43-92-14-55</td>
            </tr>
            <tr>
                <td><a class="botoncontacto" href="https://www.facebook.com/" target="_blank">Chistopher Miranda </a></td>
                <td>A01022398@itesm.mx</td>
                <td>Métodos de Pago</td>
                <td>Preguntas Frecuentes</td>
            </tr>
            <tr>
                <td><a class="botoncontacto" href="https://www.facebook.com/" target="_blank">Miguel Hernández </a></td>
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