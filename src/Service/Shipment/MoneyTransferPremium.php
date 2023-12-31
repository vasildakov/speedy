<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

/**
 * Class MoneyTransferPremium.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class MoneyTransferPremium
{
    private float $amount;

    private float $amountLocal;

    private string $payer;

    /**
     * @return $this
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return $this
     */
    public function setAmountLocal(float $amountLocal): self
    {
        $this->amountLocal = $amountLocal;

        return $this;
    }

    public function getAmountLocal(): float
    {
        return $this->amountLocal;
    }

    /**
     * @return $this
     */
    public function setPayer(string $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getPayer(): string
    {
        return $this->payer;
    }
}
