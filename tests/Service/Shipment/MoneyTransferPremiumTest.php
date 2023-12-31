<?php

declare(strict_types=1);

namespace VasilDakov\tests\Service\Shipment;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\MoneyTransferPremium;

/**
 * Class MoneyTransferPremium.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class MoneyTransferPremiumTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $json = \file_get_contents('./tests/Assets/MoneyTransferPremium.json');
        $array = \json_decode($json, true);

        $hydrator = new ClassMethodsHydrator();

        $instance = $hydrator->hydrate($array, new MoneyTransferPremium());

        $this->assertInstanceOf(MoneyTransferPremium::class, $instance);
        $this->assertEquals($array['amount'], $instance->getAmount());
        $this->assertEquals($array['amountLocal'], $instance->getAmountLocal());
        $this->assertEquals($array['payer'], $instance->getPayer());
    }
}
