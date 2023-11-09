<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloss/estilos.css?ver=1.1">
    <title>HelmutRomero</title>
</head>
<body>
          <section>Muestra de todos los productos</section>
 
         <div class="main-contet">
                    <form class="form-search" method="get" action="busquedaPro.php">
                        <input type="text" name= "Buscar" placeholder="Buscar..">
                        <button type="submit">Enviar</button>
                       

                    </form>
                    <br>
                    <br>
            </div>
           
            <?php
            require("conexionBD.php");
            $resultado = mysqli_query($conexion, "SELECT * FROM productos ");
            echo "<table> ";
                echo "<tr><th>ID_producto</th>";
                echo "<th>Seccion</th>";
                echo "<th>Producto</th>";
                echo "<th>Origen</th>";
                echo "<th>Importado</th>";
                echo "<th>Precio</th></tr>";
            while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                
                
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
            mysqli_close($conexion)
?>
       
       
    
</body>
</html>