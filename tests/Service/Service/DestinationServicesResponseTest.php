<?php

namespace VasilDakov\SpeedyTests\Service\Service;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;
use VasilDakov\Speedy\Service\Service\DestinationServicesResponse;

final class DestinationServicesResponseTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $response = new DestinationServicesResponse();

        self::assertInstanceOf(DestinationServicesResponse::class, $response);
    }

    public function testItCanBeDeserialized(): void
    {
        $serializer = (new SerializerFactory())();

        $json = \file_get_contents('./tests/Assets/DestinationServicesResponse.json');

        $response = $serializer->deserialize($json, DestinationServicesResponse::class, 'json');

        self::assertInstanceOf(DestinationServicesResponse::class, $response);
        self::assertInstanceOf(ArrayCollection::class, $response->getServices());
    }
}
