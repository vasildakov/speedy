<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

/**
 * Class ReturnAmounts.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ReturnAmounts
{
    private ?MoneyTransferPremium $moneyTransfer = null;

    public function getMoneyTransfer(): ?MoneyTransferPremium
    {
        return $this->moneyTransfer;
    }

    public function setMoneyTransfer(MoneyTransferPremium $moneyTransfer): void
    {
        $this->moneyTransfer = $moneyTransfer;
    }
}
