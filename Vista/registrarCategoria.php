<?php
    require_once('layoutSuperior.php')
?>
    <form action="../Controlador/controladorCategoria.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" />
        <br>
        <button type="submit" name="Registrar">Registrar</button>
    </form>

<?php
    require_once('layoutInferior.php')
?>
