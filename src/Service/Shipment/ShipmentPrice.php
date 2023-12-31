<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ShipmentPrice.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class ShipmentPrice
{
    /**
     * @Serializer\Type("float")
     */
    private float $amount;

    /**
     * @Serializer\Type("float")
     */
    private float $vat;

    /**
     * @Serializer\Type("float")
     */
    private float $total;

    /**
     * @Serializer\Type("string")
     */
    private string $currency;

    /**
     * @Serializer\Type("ArrayCollection<string, VasilDakov\Speedy\Service\Shipment\ShipmentPriceAmount>")
     */
    private ArrayCollection $details;

    /**
     * @Serializer\Type("float")
     */
    private float $amountLocal;

    /**
     * @Serializer\Type("float")
     */
    private float $vatLocal;

    /**
     * @Serializer\Type("float")
     */
    private float $totalLocal;

    /**
     * @Serializer\Type("string")
     */
    private string $currencyLocal;

    /**
     * @Serializer\Type("ArrayCollection<string, VasilDakov\Speedy\Service\Shipment\ShipmentPriceAmount>")
     */
    private ArrayCollection $detailsLocal;

    /**
     * @Serializer\Type("integer")
     */
    private int $currencyExchangeRateUnit;

    /**
     * @Serializer\Type("float")
     */
    private float $currencyExchangeRate;

    /**
     * @var ?ReturnAmounts
     *
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ReturnAmounts")
     */
    private ?ReturnAmounts $returnAmounts = null;

    public function __construct()
    {
        $this->details = new ArrayCollection();
        $this->detailsLocal = new ArrayCollection();
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getVat(): float
    {
        return $this->vat;
    }

    public function setVat(float $vat): void
    {
        $this->vat = $vat;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDetails(): ArrayCollection
    {
        return $this->details;
    }

    /**
     * @codeCoverageIgnore
     */
    public function setDetails(ArrayCollection $details): void
    {
        $this->details = $details;
    }

    public function getAmountLocal(): float
    {
        return $this->amountLocal;
    }

    public function setAmountLocal(float $amountLocal): void
    {
        $this->amountLocal = $amountLocal;
    }

    public function getVatLocal(): float
    {
        return $this->vatLocal;
    }

    public function setVatLocal(float $vatLocal): void
    {
        $this->vatLocal = $vatLocal;
    }

    public function getTotalLocal(): float
    {
        return $this->totalLocal;
    }

    public function setTotalLocal(float $totalLocal): void
    {
        $this->totalLocal = $totalLocal;
    }

    public function getCurrencyLocal(): string
    {
        return $this->currencyLocal;
    }

    public function setCurrencyLocal(string $currencyLocal): void
    {
        $this->currencyLocal = $currencyLocal;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDetailsLocal(): ArrayCollection
    {
        return $this->detailsLocal;
    }

    /**
     * @codeCoverageIgnore
     */
    public function setDetailsLocal(ArrayCollection $detailsLocal): void
    {
        $this->detailsLocal = $detailsLocal;
    }

    public function getCurrencyExchangeRateUnit(): int
    {
        return $this->currencyExchangeRateUnit;
    }

    public function setCurrencyExchangeRateUnit(int $currencyExchangeRateUnit): void
    {
        $this->currencyExchangeRateUnit = $currencyExchangeRateUnit;
    }

    public function getCurrencyExchangeRate(): float
    {
        return $this->currencyExchangeRate;
    }

    public function setCurrencyExchangeRate(float $currencyExchangeRate): void
    {
        $this->currencyExchangeRate = $currencyExchangeRate;
    }

    /**
     * @return ?ReturnAmounts
     */
    public function getReturnAmounts(): ?ReturnAmounts
    {
        return $this->returnAmounts;
    }

    /**
     * @param ?ReturnAmounts $returnAmounts
     */
    public function setReturnAmounts(?ReturnAmounts $returnAmounts): void
    {
        $this->returnAmounts = $returnAmounts;
    }
}
