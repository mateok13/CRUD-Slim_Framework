<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->config(array(
                        'debug' => true,
                        'templates.path' => 'vista',
                    ));
?>