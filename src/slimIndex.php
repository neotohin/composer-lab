<?php

require_once '../vendor/autoload.php';


$app = new \Slim\Slim();

# Env Variable
$_ENV['SLIM_MODE'] = 'development';


# Configuration

  $configuration = array(
      'templates.path' => './slim/templates/'
    );
  $app->setName('Amzad Slim Framework Test');

    // Only invoked if mode is "production"
    $app->configureMode('production', function () use ($app) {
      global $configuration;
      $app->config(array(
          'log.enable' => true,
          'debug' => false
      ) + $configuration);
    });

    // Only invoked if mode is "development"
    $app->configureMode('development', function () use ($app) {
      global $configuration;
      $app->config(array(
          'log.enable' => false,
          'debug' => true
      ) + $configuration);
    });;



# ROUTE

$app->get('/', function() use ($app)  {

  $book = new \Book(array('title' => 'My Book', 'ISBN' => 'ABCD'));

  $app->render('welcome.php', array( 'app' => $app ));

});


$app->run();
