<?php

date_default_timezone_set('America/Los_Angeles');


require 'vendor/autoload.php';

// Slim Configuration
$slimConfig = array(
    'view' => new \Slim\Views\Twig(),
    'mode' => 'development',
    'debug' => true
);

$app = new \Slim\Slim($slimConfig);

// Twig Configuration
//$view = $app->view();
//$view->

// Test Route
$app->get('/', function() use ($app){
    $app->render('master.html', array('test' => 'Hello, SlimTwig!'));
});




$app->run();

