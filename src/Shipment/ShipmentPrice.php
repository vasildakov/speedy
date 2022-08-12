<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ShipmentPrice
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPrice
{
    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $amount;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $vat;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $total;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $currency;

    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection<string, VasilDakov\Speedy\Shipment\ShipmentPriceAmount>")
     */
    private ArrayCollection $details;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $amountLocal;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $vatLocal;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $totalLocal;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $currencyLocal;

    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection<string, VasilDakov\Speedy\Shipment\ShipmentPriceAmount>")
     */
    private ArrayCollection $detailsLocal;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private int $currencyExchangeRateUnit;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $currencyExchangeRate;

    /**
     * @var ReturnAmounts
     * @Serializer\Type("VasilDakov\Speedy\Shipment\ReturnAmounts")
     */
    private ReturnAmounts $returnAmounts;


    public function __construct()
    {
        $this->details      = new ArrayCollection();
        $this->detailsLocal = new ArrayCollection();
    }


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
     * @return float
     */
    public function getVat(): float
    {
        return $this->vat;
    }

    /**
     * @param float $vat
     */
    public function setVat(float $vat): void
    {
        $this->vat = $vat;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @codeCoverageIgnore
     * @return ArrayCollection
     */
    public function getDetails(): ArrayCollection
    {
        return $this->details;
    }

    /**
     * @codeCoverageIgnore
     * @param ArrayCollection $details
     */
    public function setDetails(ArrayCollection $details): void
    {
        $this->details = $details;
    }

    /**
     * @return float
     */
    public function getAmountLocal(): float
    {
        return $this->amountLocal;
    }

    /**
     * @param float $amountLocal
     */
    public function setAmountLocal(float $amountLocal): void
    {
        $this->amountLocal = $amountLocal;
    }

    /**
     * @return float
     */
    public function getVatLocal(): float
    {
        return $this->vatLocal;
    }

    /**
     * @param float $vatLocal
     */
    public function setVatLocal(float $vatLocal): void
    {
        $this->vatLocal = $vatLocal;
    }

    /**
     * @return float
     */
    public function getTotalLocal(): float
    {
        return $this->totalLocal;
    }

    /**
     * @param float $totalLocal
     */
    public function setTotalLocal(float $totalLocal): void
    {
        $this->totalLocal = $totalLocal;
    }

    /**
     * @return string
     */
    public function getCurrencyLocal(): string
    {
        return $this->currencyLocal;
    }

    /**
     * @param string $currencyLocal
     */
    public function setCurrencyLocal(string $currencyLocal): void
    {
        $this->currencyLocal = $currencyLocal;
    }

    /**
     * @codeCoverageIgnore
     * @return ArrayCollection
     */
    public function getDetailsLocal(): ArrayCollection
    {
        return $this->detailsLocal;
    }

    /**
     * @codeCoverageIgnore
     * @param ArrayCollection $detailsLocal
     */
    public function setDetailsLocal(ArrayCollection $detailsLocal): void
    {
        $this->detailsLocal = $detailsLocal;
    }

    /**
     * @return int
     */
    public function getCurrencyExchangeRateUnit(): int
    {
        return $this->currencyExchangeRateUnit;
    }

    /**
     * @param int $currencyExchangeRateUnit
     */
    public function setCurrencyExchangeRateUnit(int $currencyExchangeRateUnit): void
    {
        $this->currencyExchangeRateUnit = $currencyExchangeRateUnit;
    }

    /**
     * @return float
     */
    public function getCurrencyExchangeRate(): float
    {
        return $this->currencyExchangeRate;
    }

    /**
     * @param float $currencyExchangeRate
     */
    public function setCurrencyExchangeRate(float $currencyExchangeRate): void
    {
        $this->currencyExchangeRate = $currencyExchangeRate;
    }

    /**
     * @codeCoverageIgnore
     * @return ReturnAmounts
     */
    public function getReturnAmounts(): ReturnAmounts
    {
        return $this->returnAmounts;
    }

    /**
     * @codeCoverageIgnore
     * @param ReturnAmounts $returnAmounts
     */
    public function setReturnAmounts(ReturnAmounts $returnAmounts): void
    {
        $this->returnAmounts = $returnAmounts;
    }
}