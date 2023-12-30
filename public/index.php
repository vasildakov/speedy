<?php

declare(strict_types=1);

use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponseFactory;
use VasilDakov\Speedy\Speedy;

chdir(dirname(__DIR__));
include __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable('./');
$dotenv->load();


$configuration = new Configuration(
    $_ENV['SPEEDY_USERNAME'],
    $_ENV['SPEEDY_PASSWORD'],
    $_ENV['SPEEDY_LANGUAGE']
);

$factory = new \Laminas\Diactoros\RequestFactory();
$guzzleHttp = new \GuzzleHttp\Client();

$speedy = new Speedy($configuration, $guzzleHttp, $factory);

$json = $speedy->getContractClient(new GetContractClientsRequest());

$response = (new GetContractClientsResponseFactory())($json);
dump($response);
dump($response->getClients());