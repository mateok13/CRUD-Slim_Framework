<?php

include 'modelo/conexionBD.php';
include 'aplicacion.php';

$BD = conexion();

$app->get('/', function() use ($app, $BD){
    $queryBD = $BD->prepare("select * from cliente");
    $queryBD->execute();
    
    $data['clientes'] = $queryBD->fetchAll(PDO::FETCH_ASSOC);
    $app->render('listarClientes.php', $data);
    });
    $app->run();
    
?>