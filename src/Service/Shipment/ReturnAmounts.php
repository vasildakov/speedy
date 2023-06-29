<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

/**
 * Class ReturnAmounts
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ReturnAmounts
{
    /**
     * @var MoneyTransferPremium
     */
    private MoneyTransferPremium $moneyTransfer;

    /**
     * @return MoneyTransferPremium
     */
    public function getMoneyTransfer(): MoneyTransferPremium
    {
        return $this->moneyTransfer;
    }

    /**
     * @param MoneyTransferPremium $moneyTransfer
     */
    public function setMoneyTransfer(MoneyTransferPremium $moneyTransfer): void
    {
        $this->moneyTransfer = $moneyTransfer;
    }
}
