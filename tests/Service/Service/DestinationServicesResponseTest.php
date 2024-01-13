<?php

namespace VasilDakov\SpeedyTests\Service\Service;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;
use VasilDakov\Speedy\Service\Service\DestinationServicesResponse;

final class DestinationServicesResponseTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $instance = new DestinationServicesResponse();

        self::assertInstanceOf(DestinationServicesResponse::class, $instance);
    }
}
