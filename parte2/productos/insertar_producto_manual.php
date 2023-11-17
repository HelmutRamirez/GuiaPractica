<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 require("conexionBD.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

    if(mysqli_connect_errno()){
        echo "La conexion ha fallado";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro la bd");
    
    $inserta="insert into productos values('ar91','ferreteria','pela cables','colombia','Falso',10000)";

    $resultado= mysqli_query($conexion,$inserta);

    mysqli_close($conexion);


?>
</body>
</html>

