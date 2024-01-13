<?php

namespace VasilDakov\SpeedyTests\Service\Service;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Calculation\CalculationRecipient;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;

final class DestinationServicesRequestTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $instance = new DestinationServicesRequest(
            new CalculationRecipient(true, null, null)
        );

        self::assertInstanceOf(DestinationServicesRequest::class, $instance);
        self::assertInstanceOf(CalculationRecipient::class, $instance->getRecipient());
    }
}