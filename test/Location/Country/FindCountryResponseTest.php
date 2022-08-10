<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Location\Country;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Location\Country\Country;
use VasilDakov\Speedy\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Location\Country\FindCountryResponseFactory;

/**
 * Class FindCountryResponseTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryResponseTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getCountriesArray();

        $instance = new FindCountryResponse($array);
        $this->assertInstanceOf(FindCountryResponse::class, $instance);
    }

    public function testItCanFindCountryById()
    {
        $json = $this->getCountriesJson();

        $instance = (new FindCountryResponseFactory)($json);

        $this->assertInstanceOf(Country::class, $instance->findCountryById(100));
        $this->assertNull($instance->findCountryById(9999999));
    }

    public function testItCanFindCountryByName()
    {
        $json = $this->getCountriesJson();
        $instance = (new FindCountryResponseFactory)($json);

        $this->assertInstanceOf(Country::class, $instance->findCountryByName("БЪЛГАРИЯ"));
    }

    private function getCountriesArray(): array
    {
        return \json_decode($this->getCountriesJson(), true);
    }


    private function getCountriesJson(): string
    {
        return \file_get_contents("./test/Assets/Countries.json");
    }
}