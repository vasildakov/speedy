<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class ShipmentPrice
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPrice
{
    /**
     * @var float
     */
    private float $amount;
    /**
     * @var float
     */
    private float $vat;
    /**
     * @var float
     */
    private float $total;
    /**
     * @var string
     */
    private string $currency;
    /**
     * @var ShipmentPriceAmount
     */
    private ShipmentPriceAmount $details;
    /**
     * @var float
     */
    private float $amountLocal;
    /**
     * @var float
     */
    private float $vatLocal;
    /**
     * @var float
     */
    private float $totalLocal;
    /**
     * @var string
     */
    private string $currencyLocal;
    /**
     * @var ShipmentPriceAmount
     */
    private ShipmentPriceAmount $detailsLocal;
    /**
     * @var int
     */
    private int $currencyExchangeRateUnit;
    /**
     * @var float
     */
    private float $currencyExchangeRate;
    /**
     * @var ReturnAmounts
     */
    private ReturnAmounts $returnAmounts;

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
     * @return ShipmentPriceAmount
     */
    public function getDetails(): ShipmentPriceAmount
    {
        return $this->details;
    }

    /**
     * @codeCoverageIgnore
     * @param ShipmentPriceAmount $details
     */
    public function setDetails(ShipmentPriceAmount $details): void
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
     * @return ShipmentPriceAmount
     */
    public function getDetailsLocal(): ShipmentPriceAmount
    {
        return $this->detailsLocal;
    }

    /**
     * @codeCoverageIgnore
     * @param ShipmentPriceAmount $detailsLocal
     */
    public function setDetailsLocal(ShipmentPriceAmount $detailsLocal): void
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