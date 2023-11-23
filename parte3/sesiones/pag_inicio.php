<?php
echo "HOLa";
if (!isset($_SESSION["usuario"])) {
  echo "HOLa2";
  include("form_acces.php");
  

}else{

  echo "Bienvenido al sistema".$_SESSION["correo"];
  
}
?>
