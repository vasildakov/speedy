<?php

declare(strict_types=1);

namespace VasilDakov\tests\Model;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Country;

/**
 * Class CountryTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CountryTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getArray();

        $hydrator = new ClassMethodsHydrator();
        $country = $hydrator->hydrate($array, new Country());

        $this->assertInstanceOf(Country::class, $country);
    }

    public function testItCanGetData()
    {
        $array = $this->getArray();

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

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Country())->toArray());
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/Country.json');
    }
}
