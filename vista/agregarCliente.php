<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Agregar Cliente</title>
        <link rel="stylesheet" href="../estilos.css"/>
    </head>
    <body>
    <center>
        <h3 class="tituloSesion">Agregar Cliente</h3>
        <form class="content-form" action="../controlador/agregarCli.php" method="POST" role="form">
            <?php if (isset($flash['error'])): ?>
                <p class="text-error"><?php echo $flash['error'] ?></p>
            <?php endif; ?>

            <label for="nombre">NOMBRE:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese el nombre">

            <label for="apellido">APELLIDO:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="ingrese el apellido">

            <button type="submit">GUARDAR</button>

            <?php if (isset($flash['message'])): ?>
                <p class="text-success"><?php echo $flash['message'] ?></p>
            <?php endif; ?>
        </form>
    </center>
</body>
</html>