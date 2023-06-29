<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Shipment;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\ShipmentPriceAmount;

/**
 * Class ShipmentPriceAmountTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPriceAmountTest extends TestCase
{
    public function testItCanDoSomething()
    {
        $array = $this->getArray();

        $hydrator = new ClassMethodsHydrator();
        $instance = $hydrator->hydrate($array, new ShipmentPriceAmount());

        $this->assertInstanceOf(ShipmentPriceAmount::class, $instance);
        $this->assertEquals($array['amount'], $instance->getAmount());
        $this->assertEquals($array['percent'], $instance->getPercent());
        $this->assertEquals($array['vatPercent'], $instance->getVatPercent());
    }

    private function getArray(): array
    {
        $json = $this->getJson();
        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/ShipmentPriceAmount.json");
        return $json;
    }
}
