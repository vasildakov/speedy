<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Track;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Track\TrackResponse;

final class TrackResponseTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $response = new TrackResponse();

        self::assertInstanceOf(TrackResponse::class, $response);
    }

    public function testItCanSetAndGetParcels(): void
    {
        $response = new TrackResponse();
        $response->setParcels(new ArrayCollection());

        self::assertInstanceOf(ArrayCollection::class, $response->getParcels());
    }

    public function testItCanBeDeserialized(): void
    {
        $serializer = (new SerializerFactory())();

        $json = \file_get_contents('./tests/Assets/TrackResponse.json');

        $response = $serializer->deserialize($json, TrackResponse::class, 'json');

        self::assertInstanceOf(TrackResponse::class, $response);
    }
}
