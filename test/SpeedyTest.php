<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest;

use Fig\Http\Message\RequestMethodInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use VasilDakov\Speedy\Service\Calculation;
use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Location\Complex;
use VasilDakov\Speedy\Location\Country;
use VasilDakov\Speedy\Location\Office;
use VasilDakov\Speedy\Location\Site;
use VasilDakov\Speedy\Location\State;
use VasilDakov\Speedy\Location\Street;
use VasilDakov\Speedy\Printing;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Shipment;
use VasilDakov\Speedy\Track;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Service;


/**
 * Class SpeedyTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class SpeedyTest extends TestCase
{
    protected Configuration $configuration;
    protected ClientInterface $client;
    protected RequestFactoryInterface $factory;
    protected RequestInterface $request;
    protected ResponseInterface $response;
    protected StreamInterface $stream;

    protected function setUp(): void
    {
        $this->configuration = $this->createMock(Configuration::class);
        $this->client        = $this->createMock(ClientInterface::class);
        $this->factory       = $this->createMock(RequestFactoryInterface::class);
        $this->stream        = $this->createMock(StreamInterface::class);
        $this->request       = $this->createMock(RequestInterface::class);
        $this->response      = $this->createMock(ResponseInterface::class);
    }

    /**
     * @group client
     */
    public function testItCanBeInstantiated()
    {
        $client = new Speedy($this->configuration, $this->client, $this->factory);

        $this->assertInstanceOf(Speedy::class, $client);
    }

    /**
     * @group client
     */
    public function testItCanGetContractClient()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $this->factory
            ->expects($this->once())
            ->method('createRequest')
            ->with(
                RequestMethodInterface::METHOD_POST,
                'https://api.speedy.bg/v1/client/contract')
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

        $this->stream
            ->expects($this->once())
            ->method('write')
            ->willReturn($this->request)
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
                        ['clientId' => 1, 'address' => ['countryId' => 1, 'siteId' => 2] ],
                        ['clientId' => 2, 'address' => ['countryId' => 3, 'siteId' => 4] ]
                    ]
                ])
            )
        ;

        $response = $speedy->getContractClient(new GetContractClientsRequest());

        $this->assertInstanceOf(GetContractClientsResponse::class, $response);
    }

    /**
     * @group client
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function testItCanFindCountry()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

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
                        ['id' => 100, 'name' =>  'Bulgaria']
                    ]
                ])
            )
        ;

        $response = $speedy->findCountry(new Country\FindCountryRequest('Bulgaria'));

        $this->assertInstanceOf(Country\FindCountryResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindState()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->findState(new State\FindStateRequest());

        $this->assertInstanceOf(State\FindStateResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindOffice()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->findOffice(new Office\FindOfficeRequest());

        $this->assertInstanceOf(Office\FindOfficeResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindSite()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->findSite(new Site\FindSiteRequest());

        $this->assertInstanceOf(Site\FindSiteResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindComplex()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->findComplex(new Complex\FindComplexRequest());

        $this->assertInstanceOf(Complex\FindComplexResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindStreet()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->findStreet(new Street\FindStreetRequest());

        $this->assertInstanceOf(Street\FindStreetResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanCalculate()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->calculation(new Calculation\CalculationRequest());

        $this->assertInstanceOf(Calculation\CalculationResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanTrack()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->track(new Track\TrackRequest());

        $this->assertInstanceOf(Track\TrackResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanPrint()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->print(new Printing\PrintRequest());

        $this->assertInstanceOf(Printing\PrintResponse::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanCreateShipment()
    {
        $request = $this->createMock(Shipment\CreateShipmentRequest::class);

        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

        $response = $speedy->createShipment($request);

        $this->assertInstanceOf(Shipment\CreateShipmentResponse::class, $response);
    }
}
