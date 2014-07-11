<?php

use \Illuminate\Database\Eloquent\Model as Model;

// Database information
$settings = array(
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'slim',
    'username' => 'root',
    'password' => 'root',
    'collation' => 'utf8_general_ci',
    'prefix' => ''
);

// Bootstrap Eloquent ORM
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory( new \Illuminate\Database\MySqlConnection() );
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');

Model::setConnectionResolver($resolver);
