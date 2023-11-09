<?php

$db_host="localhost";
$db_nombre="usuarios";
$db_usuario="root";
$db_contraseña="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);


if(mysqli_connect_errno()){
    echo "la conexion ha fallado";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("no se encontro la bd");

?>


