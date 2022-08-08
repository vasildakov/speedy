<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest;

use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use VasilDakov\Speedy\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Location\FindCountry;
use VasilDakov\Speedy\Speedy;

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
            ->with('POST', 'https://api.speedy.bg/v1/client/contract')
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

        $response = $speedy->getContractClient(new GetContractClientsRequest());

        $this->assertInstanceOf(ResponseInterface::class, $response);
    }

    /**
     * @group client
     */
    public function testItCanFindCountry()
    {
        $speedy = new Speedy($this->configuration, $this->client, $this->factory);

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

        $response = $speedy->findCountry(new FindCountry('Bulgaria'));

        $this->assertInstanceOf(ResponseInterface::class, $response);
    }
}
