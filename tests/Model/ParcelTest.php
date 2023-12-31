<?php

declare(strict_types=1);

namespace VasilDakov\tests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Parcel;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class ParcelTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class ParcelTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($this->getJson(), Parcel::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }

    /**
     * @throws \JsonException
     */
    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/Parcel.json');
    }
}
