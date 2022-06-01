<?php
//require_once('../Controlador/controladorCategoria.php');
require_once('../Controlador/controladorCliente.php');
$cliente = $controladorCliente->buscarCliente($_REQUEST['idCliente']);
//var_dump($listaCategoria);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header.css">
    <title>Document</title>
</head>
<body>


    <h1 align="center">Editar Cliente</h1>
    <form action="../Controlador/controladorCliente.php" method="POST">
        <label>Id Producto</label>
        <input type="text" name="idCliente" id="idCliente" readonly  value="<?php echo $cliente->getidCliente() ?>" />
        <br>
        
        <br>
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $cliente->getnombre() ?>" />
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" id="apellido" value ="<?php echo $cliente->getapellido() ?>" />
        <br>
        <label>Correo</label>
        <input type="text" name="correo" id="correo" value= "<?php echo $cliente->getcorreo() ?>" />
        <br>
        <label>Peso</label>
        <input type="text" name="peso" id="peso" value= "<?php echo $cliente->getpeso() ?>" />
        <br>
        <button type="submit" name="Actualizar">Actualizar</button>
    </form>
</body>
</html>