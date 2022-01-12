<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Lista Clientes</title>
        <link rel="stylesheet" href="estilos.css"/>
    </head>
    <body>
    <center>
        <h3 class="tituloSesion">Listado de los Clientes</h3>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cli) { ?>
                    <tr>
                        <td><?= $cli["id"] ?></td>
                        <td><?= $cli["nombre"] ?></td>
                        <td><?= $cli["apellido"] ?></td>
                        <td><a href="controlador/encontrarCliente.php?id=<?php echo $cli['id'] ?>">Editar</a></td>

                        <td><a href="controlador/eliminarCli.php?id=<?php echo $cli['id'] ?>">Borrar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div align=center>
            <br><a href="vista/agregarCliente.php">Agregar Cliente...</a>
        </div>
    </center>
</body>
</html>