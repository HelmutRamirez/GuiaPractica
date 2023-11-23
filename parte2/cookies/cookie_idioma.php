<?php 
        if(!$_COOKIE["sel_idioma"]){
            header("location:seleccion_idioma.php");//dirige a la pagina para seleccionar el idioma

        }else if($_COOKIE["sel_idioma"]=="sp"){
            header("location:pag_español.php");//dirige a la pagina en español
        }else if ($_COOKIE["sel_idioma"]=="en") {
            header("location:pag_ingles.php");//dirige a la pagina en ingles
        }


?>