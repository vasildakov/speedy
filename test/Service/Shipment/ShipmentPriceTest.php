<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Shipment;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Shipment\ShipmentPrice;

/**
 * Class ShipmentPriceTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPriceTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getArray();

        $hydrator = new ClassMethodsHydrator();

        $instance = $hydrator->hydrate($array, new ShipmentPrice());

        $this->assertInstanceOf(ShipmentPrice::class, $instance);

        $this->assertEquals($array['amount'], $instance->getAmount());
        $this->assertEquals($array['vat'], $instance->getVat());
        $this->assertEquals($array['total'], $instance->getTotal());
        $this->assertEquals($array['currency'], $instance->getCurrency());

        $this->assertEquals($array['amountLocal'], $instance->getAmountLocal());
        $this->assertEquals($array['vatLocal'], $instance->getVatLocal());
        $this->assertEquals($array['totalLocal'], $instance->getTotalLocal());
        $this->assertEquals($array['currencyLocal'], $instance->getCurrencyLocal());

        $this->assertEquals($array['currencyExchangeRateUnit'], $instance->getCurrencyExchangeRateUnit());
        $this->assertEquals($array['currencyExchangeRate'], $instance->getCurrencyExchangeRate());
    }


    private function getArray(): array
    {
        $json = $this->getJson();
        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/ShipmentPrice.json");
        return $json;
    }
}
