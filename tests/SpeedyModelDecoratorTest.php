<?php

namespace VasilDakov\SpeedyTests;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateResponse;
use VasilDakov\Speedy\SpeedyInterface;
use VasilDakov\Speedy\SpeedyModelDecorator;

final class SpeedyModelDecoratorTest extends TestCase
{
    private SpeedyInterface $speedy;

    private SerializerInterface $serializer;

    protected function setUp(): void
    {
        $this->speedy = $this->createMock(SpeedyInterface::class);
        $this->serializer = $this->createMock(SerializerInterface::class);
        parent::setUp();
    }

    public function testItCanBeConstructed(): void
    {
        $decorator = new SpeedyModelDecorator($this->speedy);

        $reflection = new \ReflectionClass($decorator);

        self::assertInstanceOf(
            SpeedyModelDecorator::class,
            $decorator
        );

        self::assertInstanceOf(
            SpeedyInterface::class,
            $reflection->getProperty('speedy')->getValue($decorator)
        );

        self::assertInstanceOf(
            SerializerInterface::class,
            $reflection->getProperty('serializer')->getValue($decorator)
        );
    }

    public function testItCanGetContractClientResponse(): void
    {
        $request = $this->createMock(GetContractClientsRequest::class);
        $response = $this->createMock(GetContractClientsResponse::class);

        $decorator = new SpeedyModelDecorator($this->speedy, $this->serializer);

        $this->speedy
            ->expects(self::once())
            ->method('getContractClient')
            ->willReturn('[]')
        ;

        $this->serializer
            ->expects(self::once())
            ->method('deserialize')
            ->with(
                data: '[]',
                type: GetContractClientsResponse::class,
                format: 'json'
            )
            ->willReturn($response)
        ;

        self::assertInstanceOf(
            GetContractClientsResponse::class,
            $decorator->getContractClient($request)
        );
    }

    public function testItCanReturnFindCountryResponse(): void
    {
        $request = $this->createMock(FindCountryRequest::class);
        $response = $this->createMock(FindCountryResponse::class);

        $decorator = new SpeedyModelDecorator($this->speedy, $this->serializer);

        $this->speedy
            ->expects(self::once())
            ->method('findCountry')
            ->willReturn('[]')
        ;

        $this->serializer
            ->expects(self::once())
            ->method('deserialize')
            ->with(
                data: '[]',
                type: FindCountryResponse::class,
                format: 'json'
            )
            ->willReturn($response)
        ;

        self::assertInstanceOf(
            FindCountryResponse::class,
            $decorator->findCountry($request)
        );
    }

    public function testItCanReturnFindStateResponse(): void
    {
        $request  = $this->createMock(FindStateRequest::class);
        $response = $this->createMock(FindStateResponse::class);

        $decorator = new SpeedyModelDecorator($this->speedy, $this->serializer);

        $this->speedy->expects(self::once())->method('findState')->willReturn('[]');

        $this->serializer
            ->expects(self::once())
            ->method('deserialize')
            ->with(
                data: '[]',
                type: FindStateResponse::class,
                format: 'json'
            )
            ->willReturn($response)
        ;

        self::assertInstanceOf(
            FindStateResponse::class,
            $decorator->findState($request)
        );
    }

    public function testItCanReturnFindSiteResponse(): void
    {
        $request  = $this->createMock(FindSiteRequest::class);
        $response = $this->createMock(FindSiteResponse::class);

        $decorator = new SpeedyModelDecorator($this->speedy, $this->serializer);

        $this->speedy->expects(self::once())->method('findSite')->willReturn('[]');

        $this->serializer
            ->expects(self::once())
            ->method('deserialize')
            ->with(
                data: '[]',
                type: FindSiteResponse::class,
                format: 'json'
            )
            ->willReturn($response)
        ;

        $response = $decorator->findSite($request);

        self::assertInstanceOf(FindSiteResponse::class, $response);
    }
}
