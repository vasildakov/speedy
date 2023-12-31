<?php

declare(strict_types=1);

namespace VasilDakov\tests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Office;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class OfficeTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class OfficeTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertInstanceOf(Office::class, new Office());
    }

    public function testItCanBeConvertedToArray(): void
    {
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($this->getJson(), Office::class, 'json');

        $this->assertIsArray($instance->toArray());
    }

    public function testItCanSetAndGet(): void
    {
        // get the serializer
        $serializer = (new SerializerFactory())();

        // deserialize: create an instance from json, testing SETTERS
        $instance = $serializer->deserialize($this->getJson(), Office::class, 'json');
        $this->assertIsObject($instance);

        // serialize: create a json from object, testing GETTERS
        $json = $serializer->serialize($instance, 'json');

        $this->assertIsString($json);
    }

    public function testItCanBeConstructed(): void
    {
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($this->getJson(), Office::class, 'json');
        $this->assertInstanceOf(Office::class, $instance);
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/Office.json');
    }

    /**
     * @throws \JsonException
     */
    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }
}
