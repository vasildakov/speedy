<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Location\Country;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;

use function file_get_contents;
use function json_decode;

/**
 * Class FindCountryRequestTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryRequestTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $hydrator = new ClassMethodsHydrator();

        $instance = $hydrator->hydrate($this->getArray(), new FindCountryRequest('BULGARIA'));
        $this->assertInstanceOf(FindCountryRequest::class, $instance);
        $this->assertEquals('BULGARIA', $instance->getName());
        $this->assertEquals('BG', $instance->getIsoAlpha2());
        $this->assertEquals('BGR', $instance->getIsoAlpha3());
    }

    private function getArray(): array
    {
        return json_decode($this->getJson(), true);
    }

    private function getJson(): string
    {
        return file_get_contents("./test/Assets/FindCountryRequest.json");
    }
}
