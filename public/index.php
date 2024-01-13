<?php

declare(strict_types=1);

use GuzzleHttp\Psr7\HttpFactory;
//use GuzzleHttp\Client;
use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\HttpClient\Psr18Client;

use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponseFactory;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\SpeedyModelDecorator;

chdir(dirname(__DIR__));
include __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable('./');
$dotenv->load();


$configuration = new Configuration(
    $_ENV['SPEEDY_USERNAME'],
    $_ENV['SPEEDY_PASSWORD'],
    $_ENV['SPEEDY_LANGUAGE']
);

//$factory = new \Laminas\Diactoros\RequestFactory();
$factory = new Psr17Factory();
$client  = new Psr18Client();

$speedy = new Speedy($configuration, $client, $factory);

$decorator = new SpeedyModelDecorator($speedy);
dump($decorator->getContractClient(new GetContractClientsRequest()));

/*
$json = $speedy->getContractClient(new GetContractClientsRequest());
$response = (new GetContractClientsResponseFactory())($json);
dump($response);
dump($response->getClients());
*/