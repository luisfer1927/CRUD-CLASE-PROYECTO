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
    <link rel="stylesheet" href="../assets/css/estilos.css">
    
    <title>Document</title>
</head>
<body>

    <header class="enca">
            <div class="wrap">
                <div class="logos">
                    Proyecto LUIS
                </div>
                <nav>
                    <a href="registroCliente.php">Inicio</a>
                    <a href="listarCliente.php">Tabla</a>
                    <a href="loginCliente.php">Login</a>
                    <a href="">Aceca de Nosotros</a>
                </nav>
            </div>
        </header>

    <h1 align="center">Editar Cliente</h1>

    <form action="../Controlador/controladorCliente.php" class="form-registro" method="POST">
      <h4>Actualice aqui</h4>
      <input class="controls" type="text" name="idCliente" id="idCliente" readonly  value="<?php echo $cliente->getidCliente() ?>" />
      <input class="controls" type="text" name="nombre" id="nombre" value="<?php echo $cliente->getnombre() ?>" />
      <input class="controls" type="text" name="apellido" id="apellido" value ="<?php echo $cliente->getapellido() ?>" />
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo" value= "<?php echo $cliente->getcorreo() ?>" />
      <input class="controls" type="text" name="peso" id="peso" value= "<?php echo $cliente->getpeso() ?>" />
      <input class="controls" type="date" name="fechaNacimiento" id="fechaNacimiento" value= "<?php echo $cliente->getfechaNacimiento() ?>" />
      <input class="controls" type="text" name="genero" id="genero" value= "<?php echo $cliente->getgenero() ?>" />
      <input class="controls" type="text" name="estatura" id="estatura" value= "<?php echo $cliente->getestatura() ?>" />
      <a href="">
      <button type="submit" name="Actualizar" class="botons">Actualizar</button>
      </a>
      
  </form>

</body>
</html>