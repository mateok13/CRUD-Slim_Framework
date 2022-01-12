<?php

include '../modelo/conexionBD.php';
include '../aplicacion.php';

$BD = conexion();

$app->post('/', function() use($app, $BD){
    $request = $app->request;
    
    $nombre = $request->post('nombre');
    $apellido = $request->post('apellido');
    $id = $request->get('id');
    
    $queryBD = $BD->prepare("update cliente set nombre=:nombre, apellido=:apellido where id=:id limit 1");
    $queryBD->execute(array(':nombre' => $nombre, ':apellido' => $apellido, ':id' => $id));
    
    $app->flash('message', 'cliente actualizado');
    
    $app->redirect('../vista/volver.php');
});

$app->run();

?>