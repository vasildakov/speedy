<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Location\Country;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Country;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponseFactory;

/**
 * Class FindCountryResponseTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindCountryResponseTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new FindCountryResponse();

        $this->assertInstanceOf(FindCountryResponse::class, $instance);
    }

    public function testItCanFindCountryById(): void
    {
        $json = $this->getCountriesJson();

        $instance = (new FindCountryResponseFactory())($json);

        $this->assertInstanceOf(Country::class, $instance->findCountryById(100));
    }

    public function testItCanFindCountryIsoAlpha2(): void
    {
        $json = $this->getCountriesJson();
        $instance = (new FindCountryResponseFactory())($json);

        $this->assertInstanceOf(Country::class, $instance->findCountryByIsoAlpha2('BG'));
    }

    public function testItCanFindCountryByName(): void
    {
        $json = $this->getCountriesJson();
        $instance = (new FindCountryResponseFactory())($json);

        $this->assertInstanceOf(Country::class, $instance->findCountryByName('БЪЛГАРИЯ'));
    }

    public function testNullResults(): void
    {
        $json = $this->getCountriesJson();
        $instance = (new FindCountryResponseFactory())($json);

        $this->assertNull($instance->findCountryById(999999999999));
        $this->assertNull($instance->findCountryByName('Some None Existing Name'));
        $this->assertNull($instance->findCountryByIsoAlpha2('Some None Existing Alpha-2'));
    }

    private function getCountriesArray(): array
    {
        $json = $this->getCountriesJson();

        /* @var array */
        return \json_decode($json, true);
    }

    private function getCountriesJson(): string
    {
        return \file_get_contents('./tests/Assets/Countries.json');
    }
}