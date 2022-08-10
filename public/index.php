<?php declare(strict_types=1);

use VasilDakov\Speedy\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Client\GetContractClientsRequest;
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

$curlHttp = new CurlHttp();
$guzzleHttp = new GuzzleHttp();

$speedy = new Speedy($configuration, $curlHttp, $factory);

//$response = $speedy->getContractClient(new GetContractClientsRequest());
$response = $speedy->findCountry(new FindCountryRequest('BULGARIA'));

echo '<pre>'; var_dump($response);
