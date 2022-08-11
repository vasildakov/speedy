<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Client;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Client\Address;

/**
 * Class AddressTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class AddressTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getArray();

        $hydrator = new ClassMethodsHydrator();
        $instance = $hydrator->hydrate($array, new Address());

        $this->assertInstanceOf(Address::class, $instance);

        $this->assertEquals($array['countryId'], $instance->getCountryId());
        $this->assertEquals($array['siteId'], $instance->getSiteId());
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/Address.json");

        return $json;
    }
}