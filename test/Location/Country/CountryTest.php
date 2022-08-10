<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Location\Country;

use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\Hydrator\ReflectionHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Location\Country\Country;

/**
 * Class CountryTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CountryTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getCountryArray();

        $hydrator = new ClassMethodsHydrator();
        $country = $hydrator->hydrate($array, new Country());

        $this->assertInstanceOf(Country::class, $country);
    }

    public function testItCanGetData()
    {
        $array = $this->getCountryArray();

        $hydrator = new ClassMethodsHydrator();
        $country = $hydrator->hydrate($array, new Country());

        $this->assertEquals($array['id'], $country->getId());
        $this->assertEquals($array['name'], $country->getName());
        $this->assertEquals($array['isoAlpha2'], $country->getIsoAlpha2());
        $this->assertEquals($array['isoAlpha3'], $country->getIsoAlpha3());
        $this->assertEquals($array['currencyCode'], $country->getCurrencyCode());
        $this->assertEquals($array['requireState'], $country->getRequireState());
        $this->assertEquals($array['addressType'], $country->getAddressType());
        $this->assertEquals($array['siteNomen'], $country->getSiteNomen());
        $this->assertEquals($array['streetTypes'], $country->getStreetTypes());
        $this->assertEquals($array['complexTypes'], $country->getComplexTypes());
        $this->assertEquals($array['postCodeFormats'], $country->getPostCodeFormats());
        $this->assertEquals($array['defaultOfficeId'], $country->getDefaultOfficeId());
    }

    private function getCountryArray(): array
    {
        $json = $this->getCountryJson();

        return \json_decode($json, true);
    }


    private function getCountryJson(): string
    {
        $json = \file_get_contents("./test/Assets/Country.json");

        return $json;
    }
}