<?php

use App\Client1;
use App\Client2;
use App\Client3;
use App\EventBus;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_error', 1);

$bus = new EventBus;

$clients = [
    "client1" => Client1::class,
    "client2" => Client2::class,
    "client3" => Client3::class
];


$client = "client2";
if (array_key_exists($client, $clients)){
    $clientObject = new $clients[$client];
    $clientObject->client($bus, $bus);
}
