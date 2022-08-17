<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Office;
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
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();
        $json = $this->getJson();
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($json, Office::class, 'json');

        $this->assertEquals($array['id'], $instance->getId());
    }
    private function getJson(): string
    {
        return \file_get_contents("./test/Assets/Office.json");
    }

    private function getArray()
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

}