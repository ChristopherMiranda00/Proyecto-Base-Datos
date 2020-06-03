<?php
require 'connection.php';
if(empty($_GET['id']))
{
    header('Locarion: index.php');
}
$id=$_GET['id'];
$sql=mysqli_query($conn,"select Nombre,Descripcion,Precio,Foto from Producto where Codigo=$id;");
$data=mysqli_fetch_array($sql);
$nombre=$data["Nombre"];
$descripcion=$data["Descripcion"];
$precio=$data["Precio"];
$foto='Imagenes/'.$data["Foto"];

?>
<!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>H&B/Producto</title>
        <link rel="stylesheet" type="text/css" href="producto.css">
    </head>
    <body>
    <div class="cabecera" >   
        <table align="center"> 
            <tr>
            <td><a class="botonlogo" href="index.php" target="_self">H&B </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
            <td><a class="botoncuenta" href="index.php" target="_self">Mi Cuenta▾</a></td>
            </tr>
        </table>
    </div><!-- fincabecera-->



    <div id="cuerpo">
        <div id="prod">    
            <table align="center" CELLSPACING="5">
                <tr>
                    <td>
   
                <img  src='<?php echo $foto;?>' alt="FOTO" width="150" height="auto" margin="auto"/>

                    </td>
                </tr>
                <tr>
                <td>
                <h1> Descripción</h1>
               
                            <h2><?php echo $descripcion ?></h2>
                
                    <td>
                </tr>
            </table>            
        </div>
        <div id="barra-lateral">
        <h3>$<?php echo $precio;?> </h3>
        <h3>Opciones de Pago</h3>
        <h2>Tarjeta</h2><hr><br>
        <a class="Anadir" href="Proyecto.php" target="_self">Añadir a la canasta</a> <br><br>
        <br><br>
                
        </div>
    </div>
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
        