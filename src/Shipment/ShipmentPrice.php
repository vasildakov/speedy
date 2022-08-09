<?php

declare(strict_types=1);


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
    private float $amount;
    private float $vat;
    private float $total;
    private string $currency;
    private ShipmentPriceAmount $details;
    private float $amountLocal;
    private float $vatLocal;
    private float $totalLocal;
    private string $currencyLocal;
    private ShipmentPriceAmount $detailsLocal;
    private int $currencyExchangeRateUnit;
    private float $currencyExchangeRate;
    private ReturnAmounts $returnAmounts;

    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setVat(float $vat)
    {
        $this->vat = $vat;
    }

    public function getVat()
    {
        return $this->vat;
    }

    public function setTotal(float $total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setDetails(ShipmentPriceAmount $details)
    {
        $this->details = $details;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setAmountLocal(float $amountLocal)
    {
        $this->amountLocal = $amountLocal;
    }

    public function getAmountLocal()
    {
        return $this->amountLocal;
    }

    public function setVatLocal(float $vatLocal)
    {
        $this->vatLocal = $vatLocal;
    }

    public function getVatLocal()
    {
        return $this->vatLocal;
    }

    public function setTotalLocal(float $totalLocal)
    {
        $this->totalLocal = $totalLocal;
    }

    public function getTotalLocal()
    {
        return $this->totalLocal;
    }

    public function setCurrencyLocal(string $currencyLocal)
    {
        $this->currencyLocal = $currencyLocal;
    }

    public function getCurrencyLocal()
    {
        return $this->currencyLocal;
    }

    public function setDetailsLocal(ShipmentPriceAmount $detailsLocal)
    {
        $this->detailsLocal = $detailsLocal;
    }

    public function getDetailsLocal()
    {
        return $this->detailsLocal;
    }

    public function setCurrencyExchangeRateUnit(int $currencyExchangeRateUnit)
    {
        $this->currencyExchangeRateUnit = $currencyExchangeRateUnit;
    }

    public function getCurrencyExchangeRateUnit()
    {
        return $this->currencyExchangeRateUnit;
    }

    public function setCurrencyExchangeRate(float $currencyExchangeRate)
    {
        $this->currencyExchangeRate = $currencyExchangeRate;
    }

    public function getCurrencyExchangeRate()
    {
        return $this->currencyExchangeRate;
    }

    public function setReturnAmounts(ReturnAmounts $returnAmounts)
    {
        $this->returnAmounts = $returnAmounts;
    }

    public function getReturnAmounts()
    {
        return $this->returnAmounts;
    }
}