<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cookie</title>
</head>
<body>
    <?php 
     setcookie("sel_idioma",$_GET["idioma"], time()+12,);
    header("location:cookie_idioma.php") ;

     //echo $_COOKIE["micookie"];
     ?>
</body>
</html>