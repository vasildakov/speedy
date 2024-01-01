<?php

namespace VasilDakov\SpeedyTests\Service\Track;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Track\TrackedParcel;

final class TrackedParcelTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $object = new TrackedParcel();

        self::assertInstanceOf(TrackedParcel::class, $object);
    }
}
