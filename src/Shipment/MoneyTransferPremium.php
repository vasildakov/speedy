<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class MoneyTransferPremium
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class MoneyTransferPremium
{
    /**
     * @var float
     */
    private float $amount;

    /**
     * @var float
     */
    private float $amountLocal;

    /**
     * @var string
     */
    private string $payer;

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amountLocal
     * @return $this
     */
    public function setAmountLocal(float $amountLocal): self
    {
        $this->amountLocal = $amountLocal;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmountLocal(): float
    {
        return $this->amountLocal;
    }

    /**
     * @param string $payer
     * @return $this
     */
    public function setPayer(string $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayer(): string
    {
        return $this->payer;
    }
}
