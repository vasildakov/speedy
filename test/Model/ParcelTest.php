<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Parcel;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Shipment\ShipmentParcelSize;

/**
 * Class ParcelTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ParcelTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, Parcel::class, 'json');

        $this->assertInstanceOf(Parcel::class, $instance);

        $this->assertEquals($array['id'], $instance->getId());
        $this->assertEquals($array['seqNo'], $instance->getSeqNo());
        $this->assertEquals($array['packageUniqueNumber'], $instance->getPackageUniqueNumber());
        $this->assertEquals($array['declaredSize'], $instance->getDeclaredSize());

    }
    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/Parcel.json");

        return $json;
    }


}