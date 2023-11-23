<?php

if(isset($_COOKIE["sel_idioma"])){

        if($_COOKIE["sel_idioma"]=="sp"){
            header("location:pag_español.php");//dirige a la pagina en español
        }else if ($_COOKIE["sel_idioma"]=="en") {
            header("location:pag_ingles.php");//dirige a la pagina en ingles
        }
}
else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <a href="crearCookie.php?idioma=sp">Español</a>
        <a href="crearCookie.php?idioma=en">Ingles</a>
    
    </body>
    </html>
    <?php
}
?>
