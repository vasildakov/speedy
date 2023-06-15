<?php

declare(strict_types=1);

use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Configuration;
use Laminas\Diactoros\RequestFactory;
use Http\Client\Curl\Client as CurlHttp;
use GuzzleHttp\Client as GuzzleHttp;


chdir(dirname(__DIR__));
include __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$configuration = new Configuration(
    $_ENV['SPEEDY_USERNAME'],
    $_ENV['SPEEDY_PASSWORD'],
    $_ENV['SPEEDY_LANGUAGE']
);

$factory = new \Laminas\Diactoros\RequestFactory();

$curlHttp   = new CurlHttp();
$guzzleHttp = new GuzzleHttp();

$speedy = new Speedy($configuration, $guzzleHttp, $factory);

//$response = $speedy->getContractClient(new GetContractClientsRequest());
$response = $speedy->findCountry(new FindCountryRequest('БЪЛГАРИЯ'));

echo '<pre>'; var_dump($response);
