<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Location\Country;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Country;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponseFactory;

use function file_get_contents;
use function json_decode;

/**
 * Class FindCountryResponseTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryResponseTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $countries = $this->getCountriesArray();

        $instance = new FindCountryResponse(new ArrayCollection($countries));
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

        $this->assertInstanceOf(Country::class, $instance->findCountryByName("БЪЛГАРИЯ"));
    }

    private function getCountriesArray(): array
    {
        $json = $this->getCountriesJson();

        /** @var array */
        return json_decode($json, true);
    }

    private function getCountriesJson(): string
    {
        return file_get_contents("./test/Assets/Countries.json");
    }
}
