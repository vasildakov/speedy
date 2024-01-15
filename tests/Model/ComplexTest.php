<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Complex;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class ComplexTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class ComplexTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();

        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, Complex::class, 'json');

        $this->assertEquals($array['id'], $instance->getId());
        $this->assertEquals($array['siteId'], $instance->getSiteId());
        $this->assertEquals($array['type'], $instance->getType());
        $this->assertEquals($array['typeEn'], $instance->getTypeEn());
        $this->assertEquals($array['name'], $instance->getName());
        $this->assertEquals($array['nameEn'], $instance->getNameEn());
    }

    public function testItCanBeExportedToArray(): void
    {
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, Complex::class, 'json');

        $this->assertIsArray($instance->toArray());
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/Complex.json');
    }
}
