<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim();
$app->config(array(
                        'debug' => true,
                        'templates.path' => 'vista',
                    ));

$BD = new PDO('mysql:host=localhost;dbname=talleframework;charset=utf8','root','');

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