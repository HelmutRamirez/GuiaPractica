

<html>
            <head>
            <title>REGISTRO USUARIO</title>
            <meta charset="utf8">
          
            </head>
            <body>
    
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
                <h3>INGRESE CON SUS DATOS</h3>
    
            <p>Correo:<input type="text" name="correo" id="correo"/></p>  
            <p>Contraseña:<input type="password" name="Contra" id="Contra"/></p>
    
            <script>
                $(document).ready(function ($) {
                    $('#Contra').strength({
                        strengthClass: 'strength',
                        strengthMeterClass: 'strength_meter',
                        strengthButtonClass: 'button_strength',
                        strengthButtonText: 'Mostrar Contraseña',
                        strengthButtonTextToggle: 'Ocultar Contraseña'
                    });
                });
            </script>
           
           
            <?php

            $error_encontrado="";
            require_once("validacion_contra.php");
            if(isset($_POST["enviar"])){
                if(validar_clave($_POST['Contra'],$error_encontrado)){
                    echo "Contraseña segura";
                }else{
                    echo "Contraseña insegura: ".$error_encontrado;
                }
            }
                echo "<br>";
            ?>
             <input type="submit" value="Enviar" name="enviar"/>
            </form>
    
            </body>
            </html>

