<?php

namespace VasilDakov\SpeedyTests\Service\Track;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Track\TrackRequest;

final class TrackRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $object = new TrackRequest([]);

        self::assertInstanceOf(TrackRequest::class, $object);
        self::assertIsArray($object->getParcels());
    }
}
