<?php

require_once '../vendor/autoload.php';

use Guzzle\Http\Client as Guzzle;

$client = new Guzzle();


// Sending json encrypted request to server
$request = $client->post('http://brany.t/json/appService',
    array('content-type' => 'application/json'),
    array()
  );

$request->setBody("{ name: 'tohin' } "); // Setting json body

$response = $request->send();

print $response;

