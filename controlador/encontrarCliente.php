<?php

include '../modelo/conexionBD.php';
include '../aplicacion.php';

$BD = conexion();

$app->get('/', function () use($app, $BD){
    $request = $app->request;
    $id = $request->get('id');
    $queryBD = $BD->prepare("select * from cliente where id = :id limit 1");
    $queryBD->execute(array(':id' => $id));
    $result = $queryBD->fetch(PDO::FETCH_ASSOC);
    
    if(!$result){
        $app->halt(404, 'cliente no encontrado');
    }
    include "../vista/modificarCliente.php";
});
$app->run();
?>