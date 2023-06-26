<?php

declare(strict_types=1);

use VasilDakov\Speedy\Service\Calculation\CalculationContent;
use VasilDakov\Speedy\Service\Calculation\CalculationPayment;
use VasilDakov\Speedy\Service\Calculation\CalculationRecipient;
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Calculation\CalculationSender;
use VasilDakov\Speedy\Service\Calculation\CalculationService;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
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

// $curlHttp   = new CurlHttp();
$guzzleHttp = new GuzzleHttp();

$speedy = new Speedy($configuration, $guzzleHttp, $factory);

# 1. Client
// $response = $speedy->getContractClient(new GetContractClientsRequest()); var_dump($response); exit();

# 2. Find Country
// $response = $speedy->findCountry(new FindCountryRequest('БЪЛГАРИЯ'));
// $response = $speedy->findCountry(new FindCountryRequest('BULGARIA'));
// $country = $response->findCountryByIsoAlpha2('BG');
// $country = $response->findCountryById(100);
// $country = $response->findCountryByName('БЪЛГАРИЯ');

# 3. Find State (us)
// $response = $speedy->findState(new FindStateRequest(840, 'AL'));

# 4. Find Site
// $response = $speedy->findSite(new FindSiteRequest(100, 'SLIVEN')); var_dump($response); exit();


# 5. Find Office
// $response = $speedy->findOffice(new FindOfficeRequest(67338));

# 6. Find Complex
// $response = $speedy->findComplex(new \VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest(68134, "KRASN"));

# 7. Find Street
// $response = $speedy->findStreet(new \VasilDakov\Speedy\Service\Location\Street\FindStreetRequest(68134, "VASIL LEVSKI"));

# 8. Calculation Request
$request = new CalculationRequest();
$request->setSender(new CalculationSender(11003520101536000));
$request->setRecipient(new CalculationRecipient(true, 77));
$request->setService(new CalculationService(true, [505]));
$request->setContent(new CalculationContent(1, 1, false, false));
$request->setPayment(new CalculationPayment('RECIPIENT'));

//var_dump($request->toArray()); exit();

$response = $speedy->calculation($request);


echo '<pre>';
var_dump($response);
