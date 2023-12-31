<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

/**
 * Class ReturnAmounts.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class ReturnAmounts
{
    private MoneyTransferPremium $moneyTransfer;

    public function getMoneyTransfer(): MoneyTransferPremium
    {
        return $this->moneyTransfer;
    }

    public function setMoneyTransfer(MoneyTransferPremium $moneyTransfer): void
    {
        $this->moneyTransfer = $moneyTransfer;
    }
}
