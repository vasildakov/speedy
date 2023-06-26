<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest;

use Fig\Http\Message\RequestMethodInterface;
use JsonException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Printing;
use VasilDakov\Speedy\Service;
use VasilDakov\Speedy\Service\Calculation;
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeResponse;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateResponse;
use VasilDakov\Speedy\Service\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Service\Location\Street\FindStreetResponse;
use VasilDakov\Speedy\Shipment;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Track;

use function json_encode;

/**
 * Class SpeedyTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 */
class SpeedyTest extends TestCase
{
    protected Configuration $config;
    protected ClientInterface $client;
    protected RequestFactoryInterface $factory;
    protected RequestInterface $request;
    protected ResponseInterface $response;
    protected StreamInterface $stream;

    protected function setUp(): void
    {
        $this->config   = $this->createMock(Configuration::class);
        $this->client   = $this->createMock(ClientInterface::class);
        $this->factory  = $this->createMock(RequestFactoryInterface::class);
        $this->stream   = $this->createMock(StreamInterface::class);
        $this->request  = $this->createMock(RequestInterface::class);
        $this->response = $this->createMock(ResponseInterface::class);
    }

    private function getClient(): Speedy
    {
        return new Speedy($this->config, $this->client, $this->factory);
    }

    /**
     * @group client
     */
    public function testItCanBeInstantiated(): void
    {
        $client = $this->getClient();

        $this->assertInstanceOf(Speedy::class, $client);
    }

    /**
     * @group client
     * @throws JsonException
     */
    public function testItCanGetContractClient(): void
    {
        $speedy = $this->getClient();

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with(
                RequestMethodInterface::METHOD_POST,
                'https://api.speedy.bg/v1/client/contract'
            )
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode([
                    'clients' => [
                        ['clientId' => 1, 'address' => ['countryId' => 1, 'siteId' => 2]],
                        ['clientId' => 2, 'address' => ['countryId' => 3, 'siteId' => 4]]
                    ]
                ], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->getContractClient(new GetContractClientsRequest());

        $this->assertInstanceOf(GetContractClientsResponse::class, $response);
    }


    /**
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    public function testItCanFindCountry(): void
    {
        $speedy = $this->getClient();

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/location/country')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode([
                    'countries' => [
                        ['id' => 100, 'name' => 'Bulgaria']
                    ]
                ], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->findCountry(new FindCountryRequest('Bulgaria'));

        $this->assertInstanceOf(FindCountryResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindState(): void
    {
        $speedy = $this->getClient();

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/location/state')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode([
                    'states' => [
                        []
                    ]
                ], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->findState(new FindStateRequest(100, 'SL'));

        $this->assertInstanceOf(FindStateResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindSite(): void
    {
        $speedy = $this->getClient();

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/location/site')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode(['sites' => [[]]], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->findSite(new FindSiteRequest(100, 'SL'));

        $this->assertInstanceOf(FindSiteResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindOffice(): void
    {
        $speedy = $this->getClient();

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/location/office')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode(['offices' => [[]]], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->findOffice(new FindOfficeRequest(123));

        $this->assertInstanceOf(FindOfficeResponse::class, $response);
    }


    /**
     * @group client
     */
    public function testItCanFindComplex(): void
    {
        $speedy = $this->getClient();

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/location/complex')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode(['complexes' => [[]]], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->findComplex(new FindComplexRequest(68134, "KRASN"));

        $this->assertInstanceOf(FindComplexResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindStreet(): void
    {
        $speedy = $this->getClient();

        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/location/street')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode(['streets' => [[]]], JSON_THROW_ON_ERROR)
            )
        ;

        $response = $speedy->findStreet(new FindStreetRequest(68134, "VASIL LEVSKI"));

        $this->assertInstanceOf(FindStreetResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanCalculate(): void
    {
        $speedy = $this->getClient();

        $request = new CalculationRequest();
        $request->setSender($this->createMock(Calculation\CalculationSender::class));
        $request->setRecipient($this->createMock(Calculation\CalculationRecipient::class));
        $request->setService($this->createMock(Calculation\CalculationService::class));
        $request->setContent($this->createMock(Calculation\CalculationContent::class));
        $request->setPayment($this->createMock(Calculation\CalculationPayment::class));


        $this->client
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->request)
            ->willReturn($this->response)
        ;

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with('POST', 'https://api.speedy.bg/v1/calculate')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('withAddedHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($this->request)
        ;

        $this->request
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->stream)
        ;

        $this->stream
            ->expects($this->once())
            ->method('getContents')
            ->willReturn(
                json_encode(['calculations' => [[]]], JSON_THROW_ON_ERROR)
            )
        ;


        $response = $speedy->calculation($request);

        $this->assertInstanceOf(Calculation\CalculationResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanTrack(): void
    {
        $speedy = $this->getClient();

        $response = $speedy->track(new Service\Track\TrackRequest());

        $this->assertInstanceOf(Service\Track\TrackResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanPrint(): void
    {
        $speedy = $this->getClient();

        $response = $speedy->print(new Service\Printing\PrintRequest());

        $this->assertInstanceOf(Service\Printing\PrintResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanCreateShipment(): void
    {
        $request = $this->createMock(Shipment\CreateShipmentRequest::class);

        $speedy = $this->getClient();

        $response = $speedy->createShipment($request);

        $this->assertInstanceOf(Shipment\CreateShipmentResponse::class, $response);
    }
}
