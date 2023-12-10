<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css?ver=1.0">
    <title>Formulario acceso</title>
    
</head>
<body>
       
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
      <div class="conent">  
      <h1 class="titulo">Acceso al sistema</h1>
        <div class="contene">
        <label >Usuario</label>
        <input type="email" name="correo"><br>
        </div>

        <div class="contene">
        <label >Contraseña</label>
        <input type="password" name="pass">
        </div>

        <div class="contene">
        <input type="checkbox" name="recordar">
        <label >Recordarme en este equipo</label>
        
        </div>

        <div class="boton">
        <input type="submit" name="enviar" value="Ingresar">
        </div>
        </form>
        <br>
        <label >¿No tiene cuenta?<a href="registro.php">Registrate</a></label>
    </div>
</body>
</html>
