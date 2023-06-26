<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class ShipmentPriceAmount
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPriceAmount
{
    /**
     * @var float
     */
    private float $amount;

    /**
     * @var float|null
     */
    private ?float $percent = null;

    /**
     * @var float
     */
    private float $vatPercent;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * @param float|null $percent
     */
    public function setPercent(?float $percent): void
    {
        $this->percent = $percent;
    }

    /**
     * @return float
     */
    public function getVatPercent(): float
    {
        return $this->vatPercent;
    }

    /**
     * @param float $vatPercent
     */
    public function setVatPercent(float $vatPercent): void
    {
        $this->vatPercent = $vatPercent;
    }
}
