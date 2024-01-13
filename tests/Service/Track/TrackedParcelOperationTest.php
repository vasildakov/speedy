<?php

namespace VasilDakov\SpeedyTests\Service\Track;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Track\TrackedParcelOperation;

final class TrackedParcelOperationTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $object = new TrackedParcelOperation(
            new \DateTime(),
            1,
            'description',
            'comment',
            'place',
            []
        );

        self::assertInstanceOf(TrackedParcelOperation::class, $object);
        self::assertIsArray($object->getAdditionalInfo());
        self::assertEquals('place', $object->getPlace());
    }
}
