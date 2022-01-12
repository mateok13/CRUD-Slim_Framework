<?php

include '../modelo/conexionBD.php';
include '../aplicacion.php';

$BD = conexion();

$app->post('/', function() use($app, $BD) {
    $request = $app->request;
    
    $nombre = $request->post('nombre');
    $apellido = $request->post('apellido');
    
    $queryBD = $BD->prepare("insert into cliente(nombre, apellido) values(:nombre, :apellido)");
    
    $insertado = $queryBD->execute(array(':nombre' => $nombre, ':apellido' => $apellido));
    
    if($insertado){
        $app->flash('messagge', 'cliente agregado');
        $app->redirect('../vista/volver.php');
    }else{
        $app->flash('error', 'error al guardar');
        echo 'ERROR AL GUARDAR';
    }
});

$app->run();
?>