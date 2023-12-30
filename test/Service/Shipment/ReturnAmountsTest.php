<?php

namespace VasilDakov\SpeedyTest\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\MoneyTransferPremium;
use VasilDakov\Speedy\Service\Shipment\ReturnAmounts;

class ReturnAmountsTest extends TestCase
{
    private MoneyTransferPremium $transferPremium;

    protected function setUp() : void
    {
        $this->transferPremium = $this->createMock(MoneyTransferPremium::class);
        parent::setUp();
    }

    /**
     * @test
     */
    public function itCanBeConstructed(): void
    {
        $instance = new ReturnAmounts();
        $instance->setMoneyTransfer($this->transferPremium);

        self::assertInstanceOf(ReturnAmounts::class, $instance);
        self::assertInstanceOf(MoneyTransferPremium::class, $instance->getMoneyTransfer());
    }
}