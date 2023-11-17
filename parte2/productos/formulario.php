<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css?ver=1.3">
</head>
<body>
 
    <h1 class="Titulo">GESTION DE PRODUCTOS</h1>

    <div class="content">
        <form method="get" action="insertar_produtos.php" class="form-reg">
        <div class="tituloForm">
                <h1>Agregar producto</h1>
        </div>
        <div class="form-row">
                <label>Codigo producto:</label>
                <input type="text" name="codigo" id="codigo">
        </div>
        <div class="form-row">
                <label>Seccion:</label>
                <input type="text" name="seccion" id="seccion">
        </div>
        <div class="form-row">
                <label>Nombre producto:</label>
                <input type="text" name="nombrep" id="nombrep">
        </div>
        <div class="form-row">
                <label>Pais origen:</label>
                <input type="text" name="pais" id="pais">
        </div>
        <div class="form-row">
                <label>¿El producto es importado?:</label>
                <select name="importado" id="importado">
                    <option >Seleccione</option>
                    <option >Verdadero</option>
                    <option >Falso</option>

                </select>       
        </div>
        <div class="form-row">
                <label>Precio del producto:</label>
                <input type="text" name="precio" id="precio">
        </div>

        <div class="form-row">
                <input type="submit" name="enviar" id="enviar" value="ENVIAR">
                <input type="reset" name="borrar" id="borrar" value="Limpiar Formulario">

        </div>
        </form>

    </div>

</body>
</html>