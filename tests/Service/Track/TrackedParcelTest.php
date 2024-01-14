<?php

namespace VasilDakov\SpeedyTests\Service\Track;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Track\TrackedParcel;

final class TrackedParcelTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $object = new TrackedParcel();

        self::assertInstanceOf(TrackedParcel::class, $object);
    }

    public function testItCanSetAndGetProps(): void
    {
        $object = new TrackedParcel();
        $object->setParcelId(1);
        $object->setExternalCarrierParcelNumbers(120);
        $object->setOperations(new ArrayCollection());

        self::assertEquals(1, $object->getParcelId());
        self::assertEquals(120, $object->getExternalCarrierParcelNumbers());
        self::assertInstanceOf(ArrayCollection::class, $object->getOperations());
    }

    public function testItCanBeDeserialized(): void
    {
        $serializer = (new SerializerFactory())();

        $json = \file_get_contents('./tests/Assets/TrackedParcel.json');

        $object = $serializer->deserialize($json, TrackedParcel::class, 'json');

        self::assertInstanceOf(TrackedParcel::class, $object);
    }
}
