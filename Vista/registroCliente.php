
<!-- require_once('../Controlador/controladorCategoria.php'); -->
<!-- require_once('layoutSuperior.php')  -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario registro</title>
  <link rel="stylesheet" href="../assets/css/estilos.css">
  <link rel="stylesheet" href="../assets/css/header.css">

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

  <form action="../Controlador/controladorCliente.php" class="form-registro" method="POST">
      <h4>Formulario registro</h4>
      <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
      <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
      <input class="controls" type="text" name="peso" id="peso" placeholder="Ingrese su peso">
      <label for=""></label>
      <input class="controls" type="date" name="fechaNacimiento" id="fechaNacimiento" placeholder="Ingrese su fecha de nacimiento">
      <input class="controls" type="text" name="genero" id="genero" placeholder="Ingrese su genero">
      <input class="controls" type="text" name="estatura" id="estatura" placeholder="Ingrese su estatura">
      <p>Estoy deacuerdo con<a href="#">Terminos y condiciones</a></p>
      <a href="">
      <button type="submit" name="Registrar" class="botons">Registrar</button>
      </a>
      <p><a href="loginCliente.php">Ya tengo cuenta?</a></p>
  </form>


</body>
</html>