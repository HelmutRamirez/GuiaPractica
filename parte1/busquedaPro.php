<?php
$mibusqueda=$_GET["Buscar"];
$mipagina=$_SERVER["PHP_SELF"];
function ejecutar_consulta($laconsulta){
   include("conexionBD.php");
   $consulta= mysqli_query($conexion,"SELECT * FROM productos WHERE seccion LIKE '%$laconsulta%'");
  ?> 
         <!DOCTYPE html>
         <html lang="en">
         <head>
      
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="estilos.css?ver=1.3">
            <title>Resultado</title>
         </head> 
         <body>
         <section>Datos encontrados</section>
         <?php
           
         echo "<table> ";
               echo "<tr><th>ID_producto</th>";
               echo "<th>Seccion</th>";
               echo "<th>Producto</th>";
               echo "<th>Origen</th>";
               echo "<th>Importado</th>";
               echo "<th>Precio</th></tr>";

         while ($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
               echo "<tr>";
               echo "<td>".$fila['id_producto']."</td>";
               echo "<td>".$fila['seccion']."</td>";
               echo "<td>".$fila['producto']."</td>";
               echo "<td>".$fila['origen']."</td>";
               echo "<td>".$fila['importado']."</td>";
               echo "<td>".$fila['precio']."</td>";
               echo "</tr>";
            }
            echo "</table>";
               ?>
            <a href="mostrarUsu.php">Regresar</a>
         </body>
         </html>
            <?php

}

if($mibusqueda!=NULL){
   ejecutar_consulta($mibusqueda);
}else 
{
   echo "<script>
   location.href ='mostrarUsu.php';
   </script>";
}