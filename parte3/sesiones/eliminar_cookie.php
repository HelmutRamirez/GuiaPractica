<?php
 setcookie("datos_usuario","helmut@gmail.com",time()-1);
 echo "Cookie eliminada con exito";
 header("location: pag_inicio.php");
?>