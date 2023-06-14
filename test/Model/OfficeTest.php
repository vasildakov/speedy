<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use DateTime;
use JsonException;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Address;
use VasilDakov\Speedy\Model\Office;
use VasilDakov\Speedy\Model\OfficeWorkingTimeSchedule;
use VasilDakov\Speedy\Model\Size;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class OfficeTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OfficeTest extends TestCase
{
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

    public function testSetCodeThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        (new Office())->setType("NotSame");
    }

    public function testCargoTypesAllowedThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        (new Office())->setCargoTypesAllowed("NotExact");
    }

    private function getJson(): string
    {
        return \file_get_contents("./test/Assets/Office.json");
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