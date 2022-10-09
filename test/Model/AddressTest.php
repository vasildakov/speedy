<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Address;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class AddressTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class AddressTest extends TestCase
{
    /**
     * @group model
     */
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();

        $hydrator = new ClassMethodsHydrator();
        $instance = $hydrator->hydrate($array, new Address(4436));

        $this->assertInstanceOf(Address::class, $instance);

        $this->assertEquals($array['countryId'], $instance->getCountryId());
        $this->assertEquals($array['siteId'], $instance->getSiteId());
        $this->assertEquals($array['siteType'], $instance->getSiteType());
        $this->assertEquals($array['siteName'], $instance->getSiteName());
        $this->assertEquals($array['postCode'], $instance->getPostCode());
        $this->assertEquals($array['streetId'], $instance->getStreetId());

        $this->assertEquals($array['streetType'], $instance->getStreetType());
        $this->assertEquals($array['streetNo'], $instance->getStreetNo());
        $this->assertEquals($array['streetName'], $instance->getStreetName());
        $this->assertEquals($array['entranceNo'], $instance->getEntranceNo());
        $this->assertEquals($array['floorNo'], $instance->getFloorNo());

        $this->assertEquals($array['x'], $instance->getX());
        $this->assertEquals($array['y'], $instance->getY());

        $this->assertEquals($array['apartmentNo'], $instance->getApartmentNo());
        $this->assertEquals($array['complexId'], $instance->getComplexId());

        $this->assertEquals($array['fullAddressString'], $instance->getFullAddressString());
        $this->assertEquals($array['siteAddressString'], $instance->getSiteAddressString());
        $this->assertEquals($array['localAddressString'], $instance->getLocalAddressString());

        $this->assertIsArray($instance->toArray());
    }

    /**
     * @group model
     */
    public function testItCanBeDeserialized()
    {
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, Address::class, 'json');

        $this->assertInstanceOf(Address::class, $instance);
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/AddressFull.json");

        return $json;
    }
}