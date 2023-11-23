<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css?ver=1.0">
    <title>Formulario acceso</title>
    
</head>
<body>
    

        <?php
        if(isset($_POST["enviar"])){
            try {
                $base= new PDO("mysql:host=localhost; dbname=datos_usuario", "root","");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql="SELECT * FROM datos_usuarioo WHERE usuario= :login AND password1= :password";

                $resultado=$base->prepare ($sql);

                $corre=htmlentities(addslashes($_POST["correo"]));

                $contra=htmlentities(addslashes($_POST["pass"])); 

                $resultado->bindValue(":login", $corre);

            // Spassword-password_hash($contraseña->getClave(), PASSWORD_DEFAULT);

                $resultado->bindValue(":password",$contra);

                $resultado->execute();

                $numero_registro=$resultado->rowCount();
                

             if($numero_registro!=0){

            //se inicia la sesion si el usuario esta registrado

                session_start();
                $autenticar1=true;
                $_SESSION["usuario"]=$_POST["correo"];
                $detino="pag_inicio.php?autenticar=".urldecode($autenticar1);
                header("location:".$detino);
                
             }
            else{ 
                //header("location:form_acces.php");
                echo "LOS DATOS DE USUARIO SON INCORRECTOS";

            }
            }catch(Exception $e){
            die("Error:". $e->getMessage());}
            }
        
        else{
            ?>
        <h1 class="titulo">Acceso al sistema</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
      <div class="conent">  
        
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
    </div>
</body>
</html>
<?php
        }
?>