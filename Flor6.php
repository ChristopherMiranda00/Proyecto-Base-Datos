<?php
require 'connection.php';
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
            <td><a class="botonlogo" href="Proyecto.php" target="_self">H&B </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
            <td><a class="botoncuenta" href="Proyecto.php" target="_self">Mi Cuenta▾</a></td>
            </tr>
        </table>
    </div><!-- fincabecera-->

    <div class="menu" >   <!-- incio menu-->
        <table align="center"> 
        <tr>
        <td><a class="botonmenu" href="Peluches.php" target="_self">Peluches▾ </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><a class="botonmenu" href="Flores.php" target="_self">Flores▾ </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><a class="botonmenu" href="Golosinas.php" target="_self">Golosinas▾ </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        </table>
    </div><!-- fin menu-->


    <div id="cuerpo">
        <div id="prod">    
            <table align="center" CELLSPACING="5">
                <tr>
                    <td>
   
                <img src="Imagenes/f6.jpg"/>

                    </td>
                </tr>
                <tr>
                <td>
                <h1> Descripción</h1>
                <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 171";
                        $result=mysqli_query($conn, $sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <h2><?php echo $mostrar['Descripcion'] ?></h1>
                        <?php
                        }   
                        ?>
                    <td>
                </tr>
            </table>            
        </div>
        <div id="barra-lateral">
        <?php
        $sql= "SELECT * FROM Proyecto.producto where Codigo = 171";
        $result=mysqli_query($conn, $sql);

        while($mostrar=mysqli_fetch_array($result)){
          ?>
        <h1><?php echo $mostrar['Nombre'] ?></h1>
        <h2><?php echo $mostrar['Codigo'] ?></h2>
        <h2><?php echo $mostrar['Precio'] ?></h2><hr>
        <?php
        }   
          ?>
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
        