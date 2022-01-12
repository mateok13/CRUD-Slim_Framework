<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Cliente</title>
        <link rel="stylesheet" href="../estilos.css"/>
    </head>
    <body>
    <center>
        <h3 class="tituloSesion">Editar Cliente</h3>

        <form class="content-form" action="modificarCli.php?id=<?php echo $result['id'] ?>" method="POST" role="form">
            <?php if (isset($flash['error'])): ?>
                <p class="text-error"><?php echo $flash['error'] ?></p>
            <?php endif; ?>


            <label for="nombre">NOMBRE:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese el nombre" value="<?php echo $result['nombre'] ?>">

            <label for="apellido">APELLIDO:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="ingrese el apellido" value="<?php echo $result['apellido'] ?>">

            <button type="submit">EDITAR</button>

            <?php if (isset($flash['message'])): ?>
                <p class="text-success"><?php echo $flash['message'] ?></p>
            <?php endif; ?>

        </form>
    </center>
</body>
</html>