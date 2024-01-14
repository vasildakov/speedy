<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Location\Country;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Country;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;

/**
 * Class FindCountryResponseTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
final class FindCountryResponseTest extends TestCase
{
    protected SerializerInterface $serializer;

    protected function setUp(): void
    {
        $this->serializer = (new SerializerFactory())();
        parent::setUp();
    }

    public function testItCanBeConstructed(): void
    {
        $instance = new FindCountryResponse();

        $this->assertInstanceOf(FindCountryResponse::class, $instance);
    }

    public function testItCanFindCountryById(): void
    {
        $json = $this->getCountriesJson();

        $instance = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        $this->assertInstanceOf(Country::class, $instance->findCountryById(100));
    }

    public function testItCanFindCountryIsoAlpha2(): void
    {
        $json = $this->getCountriesJson();

        $instance = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        $this->assertInstanceOf(Country::class, $instance->findCountryByIsoAlpha2('BG'));
    }

    public function testItCanFindCountryByName(): void
    {
        $json = $this->getCountriesJson();
        $instance = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        $this->assertInstanceOf(Country::class, $instance->findCountryByName('БЪЛГАРИЯ'));
    }

    public function testNullResults(): void
    {
        $json = $this->getCountriesJson();
        $instance = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

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
