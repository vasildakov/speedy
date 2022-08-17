<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use DateTime;
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
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();
        $json = $this->getJson();
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($json, Office::class, 'json');

        $this->assertEquals($array['id'], $instance->getId());
        $this->assertEquals($array['name'], $instance->getName());
        $this->assertEquals($array['nameEn'], $instance->getNameEn());
        $this->assertEquals($array['siteId'], $instance->getsiteId());
        $this->assertInstanceOf(Address::class, $instance->getAddress());
        $this->assertInstanceOf(DateTime::class, $instance->getWorkingTimeFrom());
        $this->assertInstanceOf(DateTime::class, $instance->getWorkingTimeTo());
        $this->assertInstanceOf(DateTime::class, $instance->getWorkingTimeHalfFrom());
        $this->assertInstanceOf(DateTime::class, $instance->getWorkingTimeHalfTo());
        $this->assertInstanceOf(DateTime::class, $instance->getWorkingTimeDayOffFrom());
        $this->assertInstanceOf(DateTime::class, $instance->getWorkingTimeDayOffTo());
        $this->assertInstanceOf(DateTime::class, $instance->getSameDayDepartureCutoff());
        $this->assertInstanceOf(DateTime::class, $instance->getSameDayDepartureCutoffHalf());
        $this->assertInstanceOf(DateTime::class, $instance->getSameDayDepartureCutoffDayOff());
        $this->assertInstanceOf(Size::class, $instance->getMaxParcelDimensions());
        $this->assertEquals($array['maxParcelWeight'], $instance->getMaxParcelWeight());
        $this->assertEquals($array['type'], $instance->getType());
        $this->assertEquals($array['nearbyOfficeId'], $instance->getNearbyOfficeId());
        $this->assertInstanceOf(OfficeWorkingTimeSchedule::class, $instance->getWorkingTimeSchedule());
        $this->assertFalse($instance->isPalletOffice());
        $this->assertFalse($instance->isCardPaymentAllowed());
        $this->assertFalse($instance->isCashPaymentAllowed());
        $this->assertInstanceOf(DateTime::class, $instance->getValidFrom());
        $this->assertInstanceOf(DateTime::class, $instance->getValidTo());
        $this->assertEquals($array['cargoTypesAllowed'], $instance->getCargoTypesAllowed());
        $this->assertFalse($instance->isPickUpAllowed());
        $this->assertFalse($instance->isdropOffAllowed());



    }
    public function testSetCodeThrowsAnException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $instance = new Office();
        $instance->setType("NotSame");
        $instance->setCargoTypesAllowed("NotExact");
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