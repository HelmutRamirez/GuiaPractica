<?php
    $id=$_GET["codigo"];
    $secc=$_GET["seccion"];
    $nombre=$_GET["nombrep"];
    $pais=$_GET["pais"];
    $import=$_GET["importado"];
    $preci=$_GET["precio"];
    require("conexionBD.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);

    if(mysqli_connect_errno()){
        echo "La conexion ha fallado";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro la bd");
    
    $inserta="INSERT into productos(id_producto,seccion,producto,origen,importado,precio) 
    values('$id','$secc','$nombre','$pais','$import','$preci')";

    $resultado= mysqli_query($conexion,$inserta);

    if($resultado==false){
        echo "ERROR DE EJECUCION";
    }else {
        echo "El producto fue almacenado exitosamente con los siguientes datos";
        echo "Codigo:" ."$id"."<br>";
        echo "Seccion:" ."$secc"."<br>";
        echo "Producto" ."$nombre"."<br>";
        echo "Pais de origen" ."$pais"."<br>";
        echo "¿Es importado?" ."$import"."<br>";
        echo "Precio" ."$preci"."<br>";
    }
    mysqli_close($conexion);
?>