<?php

namespace VasilDakov\SpeedyTest;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\SpeedyInterface;
use VasilDakov\Speedy\SpeedyModelDecorator;

class SpeedyModelDecoratorTest extends TestCase
{
    private SpeedyInterface $speedy;

    private SerializerInterface $serializer;

    protected function setUp() : void
    {
        $this->speedy = $this->createMock(SpeedyInterface::class);
        $this->serializer = $this->createMock(SerializerInterface::class);
        parent::setUp();
    }

    /**
     * @test
     */
    public function itCanBeConstructed(): void
    {
        $decorator = new SpeedyModelDecorator($this->speedy);

        $reflection = new ReflectionClass($decorator);

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

    /**
     * @test
     */
    public function itCanGetContractClientResponse(): void
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
                format: 'json')
            ->willReturn($response)
        ;

        self::assertInstanceOf(
            GetContractClientsResponse::class,
            $decorator->getContractClient($request)
        );
    }
}
