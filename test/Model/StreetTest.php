<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use JsonException;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Street;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class StreetTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class StreetTest extends TestCase

{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), Street::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Street())->toArray());
    }

    private function getJson(): string
    {
        return \file_get_contents("./test/Assets/Site.json");
    }

    /**
     * @throws JsonException
     */
    private function getArray()
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512,JSON_THROW_ON_ERROR);
    }
}