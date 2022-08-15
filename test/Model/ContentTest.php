<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Content;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class ContentTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ContentTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();
        $json  = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, Content::class, 'json');
        $this->assertInstanceOf(Content::class, $instance);

        /* $this->assertEquals($array['parcelsCount'], $instance->getParcelsCount());
        $this->assertEquals($array['declaredWeight'], $instance->getDeclaredWeight());
        $this->assertEquals($array['measuredWeight'], $instance->getMeasuredWeight());
        $this->assertEquals($array['calculationWeight'], $instance->getCalculationWeight());
        $this->assertEquals($array['contents'], $instance->getContents());
        $this->assertEquals($array['package'], $instance->getPackage());
        $this->assertEquals($array['documents'], $instance->isDocuments());
        $this->assertEquals($array['palletized'], $instance->isPalletized());
        $this->assertInstanceOf(ArrayCollection::class, $instance->getParcels());
        $this->assertEquals($array['pendingParcels'], $instance->isPendingParcels());

        $this->assertEquals(count($array['parcels']), $instance->getParcels()->count());

        foreach ($instance->getParcels() as $parcel) {
            $this->assertInstanceOf(ShipmentParcelSize::class, $parcel->getDeclaredSize());
        } */
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/Content.json");

        return $json;
    }
}