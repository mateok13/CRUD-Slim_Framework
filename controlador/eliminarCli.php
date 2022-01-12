<?php

include '../modelo/conexionBD.php';
include '../aplicacion.php';

$BD = conexion();

$app->get('/', function() use($app, $BD) {
    $request = $app->request;
    
    $id = $request->get('id');
    
    $queryBD = $BD->prepare("delete from cliente where id = :id limit 1");
    $insertado = $queryBD->execute(array(':id' => $id));

    echo 'CLIENTE ELIMINADO';
    $app->redirect('../vista/volver.php');
});

$app->run();

?>