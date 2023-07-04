<?php

declare(strict_types=1);

use VasilDakov\Speedy\Model\Payment;
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
use VasilDakov\Speedy\Service\Shipment;
use VasilDakov\Speedy\Service\Shipment\ShipmentPayment;
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
/* $request = new CalculationRequest();
$request->setSender(new CalculationSender(11003520101536000));
$request->setRecipient(new CalculationRecipient(true, 77));
$request->setService(new CalculationService(true, [505]));
$request->setContent(new CalculationContent(1, 1, false, false));
$request->setPayment(new CalculationPayment(Payment::RECIPIENT));
$response = $speedy->calculation($request); */

# 9. Destination
/* $response = $speedy->destination(new \VasilDakov\Speedy\Service\Service\DestinationServicesRequest(
    new CalculationRecipient(true, 77)
)); */

$sender = new Shipment\ShipmentSender(
    new Shipment\ShipmentPhoneNumber('0888112233'),
    'ivan@petrov.bg',
    'IVAN PETROV',
    77
);

$recipient = new Shipment\ShipmentRecipient(
    new Shipment\ShipmentPhoneNumber('0899445566'),
    'VASIL GEORGIEV',
    'vasil@georgiev.bg',
    new Shipment\ShipmentAddress(68134, 29, 3109, '1A')
);

$additionalServices = new Shipment\ShipmentAdditionalServices();
$additionalServices->setCod(["amount" => 100, "processingType" => "CASH"]);
$additionalServices->setDeclaredValue(["amount" => 100, "fragile" => true, "ignoreIfNotApplicable" => true]);
$additionalServices->setObpd(["option" => "OPEN", "returnShipmentServiceId" => 505, "returnShipmentPayer" => "SENDER"]);

$service = new Shipment\ShipmentService(505);
$service->setAdditionalServices($additionalServices);
$content = new Shipment\ShipmentContent(1, 0.6, 'MOBILE PHONE', 'BOX', null);
$payment = new Shipment\ShipmentPayment('RECIPIENT', 'RECIPIENT');

$response = $speedy->createShipment(
    new Shipment\CreateShipmentRequest(
        sender: $sender,
        recipient: $recipient,
        service: $service,
        content: $content,
        payment: $payment,
        ref1: "ORDER 123456"
    )
);


echo '<pre>';
var_dump([
    $response->getPrice()->getTotalLocal(),
    $response->getPrice()->getCurrencyLocal()
]);
