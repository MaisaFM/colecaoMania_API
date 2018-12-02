<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';
require_once './Paises/Pais.php';

$app = new \Slim\App;

$app->get('/', function () {
echo "colecaoMania_API";
});

$app->get('/pais','getPais');

$app->run();
?>
