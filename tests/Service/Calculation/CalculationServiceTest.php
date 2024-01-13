<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Calculation;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Calculation\CalculationService;

final class CalculationServiceTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $instance = new CalculationService(
            autoAdjustPickupDate: true,
            serviceIds: []
        );

        self::assertInstanceOf(CalculationService::class, $instance);
    }

    public function testItCanSetAndGetProperties(): void
    {
        $instance = new CalculationService(
            autoAdjustPickupDate: false,
            serviceIds: []
        );

        $instance->setAutoAdjustPickupDate(true);
        $instance->setServiceIds([1, 2, 3]);

        self::assertTrue($instance->getAutoAdjustPickupDate());
        self::assertCount(3, $instance->getServiceIds());
    }
}
