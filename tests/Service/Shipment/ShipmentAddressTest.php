<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentAddressTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 *
 * @psalm-suppress MissingConstructor
 */
class ShipmentAddressTest extends TestCase
{
    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentAddress(1000);

        $array = $object->toArray();

        $this->assertArrayHasKey(Property::SITE_ID->value, $array);
    }

    public function testItCanBeSerialized(): void
    {
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($this->getJson(), ShipmentAddress::class, 'json');

        $json = $serializer->serialize($instance, 'json');
        $this->assertJson($json);
    }

    public function testItCanBeDeserialized(): void
    {
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($this->getJson(), ShipmentAddress::class, 'json');

        $this->assertInstanceOf(ShipmentAddress::class, $instance);

        /* $array = $instance->toArray();
        $this->assertArrayHasKey(Speedy::COUNTRY_ID, $array);
        $this->assertArrayHasKey(Speedy::STATE_ID, $array);
        $this->assertArrayHasKey(Speedy::SITE_TYPE, $array);
        $this->assertArrayHasKey(Speedy::SITE_NAME, $array);
        $this->assertArrayHasKey(Speedy::POST_CODE, $array);
        $this->assertArrayHasKey(Speedy::STREET_ID, $array);
        $this->assertArrayHasKey(Speedy::STREET_TYPE, $array);
        $this->assertArrayHasKey(Speedy::STREET_NAME, $array);
        $this->assertArrayHasKey(Speedy::STREET_NO, $array);
        $this->assertArrayHasKey(Speedy::COMPLEX_ID, $array);
        $this->assertArrayHasKey(Speedy::COMPLEX_TYPE, $array);
        $this->assertArrayHasKey(Speedy::COMPLEX_NAME, $array);
        $this->assertArrayHasKey(Speedy::BLOCK_NO, $array);
        $this->assertArrayHasKey(Speedy::ENTRANCE_NO, $array);
        $this->assertArrayHasKey(Speedy::FLOOR_NO, $array);
        $this->assertArrayHasKey(Speedy::APARTMENT_NO, $array);
        $this->assertArrayHasKey(Speedy::POI_ID, $array);
        $this->assertArrayHasKey(Speedy::ADDRESS_NOTE, $array);
        $this->assertArrayHasKey(Speedy::ADDRESS_LINE_1, $array);
        $this->assertArrayHasKey(Speedy::ADDRESS_LINE_2, $array);
        $this->assertArrayHasKey(Speedy::X, $array);
        $this->assertArrayHasKey(Speedy::Y, $array); */
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/AddressFull.json');
    }
}
