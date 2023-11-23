<?php


if (!isset($_GET['autenticar'])) {
 
  header("location:form_acces.php");
 

}else{
    //indica que ya esta logueado
    echo "Bienvenido al sistema";
  if ($_GET['autenticar']==1) {
    $autenticar=true;
  }else{
    $autenticar==false;
  }
 if($autenticar==true || isset($_COOKIE["datos_usuario"])){
    include("perfil_usuario.php");
    if(isset($_POST["recordar"])) {
      setcookie("datos_usuario",$_POST["correo"],time()+1296000);//donde va este codigo?}
    }
  }
}
  
/*
if($autenticar==false) {
  if (!isset($_COOKIE["datos_usuario"])) {
    include("form_acces.php");
  }
}*/
?>
