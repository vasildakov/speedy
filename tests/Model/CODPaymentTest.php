<?php

declare(strict_types=1);

namespace VasilDakov\tests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\CODPayment;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class CODPaymentTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
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
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), CODPayment::class, 'json');

        $this->assertIsArray($instance->toArray());
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/CODPayment.json');
    }
}
