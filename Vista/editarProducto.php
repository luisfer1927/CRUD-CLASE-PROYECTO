<?php
require_once('../Controlador/controladorCategoria.php');
require_once('../Controlador/controladorProducto.php');
$producto = $controladorProducto->buscarProducto($_REQUEST['idProducto']);
//var_dump($listaCategoria);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Editar Producto</h1>
    <form action="../Controlador/controladorProducto.php" method="POST">
        <label>Id Producto</label>
        <input type="text" name="idProducto" id="idProducto" readonly  value="<?php echo $producto->getidProducto() ?>" />
        <br>
        <label>Categoría</label>
        <select name="idCategoria" id="idCategoria">
            <option value="">Seleccione</option>
            <?php 
            foreach($listaCategoria as $categoria ){
                echo "<option value='$categoria[idCategoria]'";

                if($categoria['idCategoria'] == $producto->getidCategoria()){
                    echo "selected";
                }
                echo ">";
                echo $categoria['nombre'];
                echo "</option>";
            }
            ?>
        </select>
        <br>
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $producto->getnombre() ?>" />
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" id="precio" value ="<?php echo $producto->getprecio() ?>" />
        <br>
        <label>Estado</label>
        <input type="text" name="estado" id="estado" value= "<?php echo $producto->getestado() ?>" />
        <br>
        <button type="submit" name="Actualizar">Actualizar</button>
    </form>
</body>
</html>