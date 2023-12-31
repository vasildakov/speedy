<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CalculationService.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CalculationService
{
    use ToArray;

    private bool $autoAdjustPickupDate = true;

    private array $serviceIds = [];

    public function __construct(bool $autoAdjustPickupDate, array $serviceIds)
    {
        $this->autoAdjustPickupDate = $autoAdjustPickupDate;
        $this->serviceIds = $serviceIds;
    }

    public function setAutoAdjustPickupDate(bool $autoAdjustPickupDate): void
    {
        $this->autoAdjustPickupDate = $autoAdjustPickupDate;
    }

    public function getAutoAdjustPickupDate(): bool
    {
        return $this->autoAdjustPickupDate;
    }

    public function setServiceIds(array $serviceIds): void
    {
        $this->serviceIds = $serviceIds;
    }

    public function getServiceIds(): array
    {
        return $this->serviceIds;
    }
}
