<?php

declare(strict_types=1);

namespace VasilDakov\tests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Site;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class SiteTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class SiteTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), Site::class, 'json');

        $this->assertInstanceOf(Site::class, $instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }

    public function testItCanBeExportedToArray(): void
    {
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), Site::class, 'json');

        $this->assertIsArray($instance->toArray());
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/Site.json');
    }

    /**
     * @throws \JsonException
     */
    private function getArray()
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }
}
