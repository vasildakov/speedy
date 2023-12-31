<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

/**
 * Class ShipmentPriceAmount.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class ShipmentPriceAmount
{
    private float $amount;

    private ?float $percent = null;

    private float $vatPercent;

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getPercent(): ?float
    {
        return $this->percent;
    }

    public function setPercent(?float $percent): void
    {
        $this->percent = $percent;
    }

    public function getVatPercent(): float
    {
        return $this->vatPercent;
    }

    public function setVatPercent(float $vatPercent): void
    {
        $this->vatPercent = $vatPercent;
    }
}
