<http>
 
  <head lang="en">
    <meta charset="UTF-8">
    <title>H&B/Newuser</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="code.css">
  </head>
  <body>
  <div id="marco">
    <label for="nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Ingrese Nombre" name="nombre" required>

    <label for="apellido"><b>Apellido</b></label>
    <input type="password" placeholder="Ingrese Apellido" name="apellido" required><br>

    <label for="mail"><b>Mail</b></label>
    <input type="email" placeholder="Ingrese Mail" name="mail" required><br>

    <label for="direc"><b>Dirección</b></label>
    <input type="text" placeholder="Ingrese su Dirección" name="direc" required><br>

    <label for="telefono"><b>Telefono</b></label>
    <input type="tel" placeholder="Ingrese Telefono" name="telefono" required><br>


    <!--<label for="bday"><b>Fecha de Nacimiento</b></label>
    <input type="date" placeholder="Ingrese su fecha de nacimiento" name="dbay" required><br><br>-->

    <input type="text" name="input" placeholder="YYYY-MM-DD" required pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])/(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])/(?:30))|(?:(?:0\[13578\]|1\[02\])-31))" title="Enter a date in this format YYYY/MM/DD"/>
    <input type="submit"><br>

    <label for="uname"><b>Usuario</b></label><br>
    <input type="text" placeholder="Ingrese Usuario" name="uname" required><br>

    <label for="psw"><b>Contraseña</b></label><br>        
    <input type="password" placeholder="Ingrese contraseña" name="psw" required><br><br>

    <a class="cancelbtn" href="Login.php" target="_self">Login</a> <br><br>

    <a class="cancelbtn" href="Proyecto.php" target="_self">Cancelar</a> <br><br>
  </div>

  
  </body>
</http>