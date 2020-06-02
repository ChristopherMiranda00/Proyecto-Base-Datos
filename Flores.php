<?php
require 'connection.php';
?>
<!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>H&B/Flores</title>
        <link rel="stylesheet" type="text/css" href="code.css">
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
        <td><a class="botonmenu" href="Regalos.php" target="_self">Regalos▾ </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><a class="botonmenu" href="Flores.php" target="_self">Flores▾ </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><a class="botonmenu" href="Golosinas.php" target="_self">Golosinas▾ </a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        </table>
    </div><!-- fin menu-->

    <div id="cuerpo">
        <div id="prod">    
        <table  align="center" CELLSPACING="10" > 
            <tr>
            <td>
            <form action="Producto.php" method="post">
                    <button type="submit" name="estado" value='1'><img src="Imagenes/f1.jpg"/>
                    <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 121";
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
                    <td>
            <form action="Producto.php" method="post">
                    <button type="submit" name="estado" value='1'><img src="Imagenes/f2.jpg"/>
                    <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 131";
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
                    <td>
            <form action="Producto.php" method="post">
                    <button type="submit" name="estado" value='1'><img src="Imagenes/f3.jpg"/>
                    <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 141";
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
            </tr>  
            <tr>
            <td>
            <form action="Producto.php" method="post">
                    <button type="submit" name="estado" value='1'><img src="Imagenes/f4.jpg"/>
                    <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 151";
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
                    <td>
            <form action="Producto.php" method="post">
                    <button type="submit" name="estado" value='1'><img src="Imagenes/f5.jpg"/>
                    <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 161";
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
                    <td>
            <form action="Producto.php" method="post">
                    <button type="submit" name="estado" value='1'><img src="Imagenes/f6.jpg"/>
                    <?php
                        $sql= "SELECT * FROM Proyecto.producto where Codigo = 171";
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
            </tr> 
            
        </table>         
        </div>
        <div id="barra-lateral">
        <h3>Flores!</h3>
            <h1>Ordenar por:</h1>
            <h2>Precio▾</h2>
            <h2>Tipo de Flor▾</h2>
            <h2>Caja▾</h2>
            <h2>Florero▾</h2>
            <h2>Ramo▾</h2><br>
            <h1>Promociones</h3>
                
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
        