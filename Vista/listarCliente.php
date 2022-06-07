<?php
require_once('../Controlador/controladorCliente.php');
// require_once('layoutSuperior.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/header.css">
    
    <title>Form</title>
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

 <br>
    
    


    <div class="espacio-tabla">

        <h1 align="center">Gestion de Clientes</h1>
    <table class="table table-dark table-striped">
        <thead>
            
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Peso</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Genero</th>
                <th scope="col">Estatura</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaCliente as $cliente){
                    echo "<tr>";
                    echo "<td>".$cliente['idCliente']."</td>";
                    echo "<td>".$cliente['nombre']."</td>";
                    echo "<td>".$cliente['apellido']."</td>";
                    echo "<td>".$cliente['correo']."</td>";
                    echo "<td>".$cliente['peso']."</td>";
                    echo "<td>".$cliente['fechaNacimiento']."</td>";
                    echo "<td>".$cliente['genero']."</td>";
                    echo "<td>".$cliente['estatura']."</td>";

                    echo "<td>
                    <form id='frmCliente$cliente[idCliente]' method='POST' action='../Controlador/controladorCliente.php'>
                        <input type='hidden' name='idCliente' value=".$cliente['idCliente']." />
                        <button type='submit' class='btn btn-success' name='Editar'>Editar</button>
                        <button type='button' onclick='validarEliminacion($cliente[idCliente])' class='btn btn-danger' name='Eliminar'>Eliminar</button>
                        <input type='hidden' name='Eliminar' />
                        </form>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <a href="../Controlador/controladorCliente.php?vista=registroCliente.php" >
        <button type="submit" class="btn btn-success">Registrar nuevo cliente</button>
    </a>

    <script>
        //Declarar la función de javascript
        function validarEliminacion(idCliente){
            if(confirm('¿Realmente desea eliminar?')){
                document.getElementById('frmCliente'+idCliente).submit();
            }
        }
    </script>
<!-- <?php
        // require_once('layoutInferior.php')
    ?> -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    
</body>

</html>