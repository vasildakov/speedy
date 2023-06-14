<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Model\CODPayment;

/**
 * Class CODPaymentTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CODPaymentTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();

        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, CODPayment::class, 'json');

        $this->assertInstanceOf(CODPayment::class, $instance);
        $this->assertInstanceOf(\DateTime::class, $instance->getDate());
        $this->assertEquals($array['totalPayedOutAmount'], $instance->getTotalPayedOutAmount());

    }

    public function testItCanBeDeserialized(): void
    {
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, CODPayment::class, 'json');

        $this->assertInstanceOf(CODPayment::class, $instance);
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new CODPayment())->toArray());
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/CODPayment.json");

        return $json;
    }
}