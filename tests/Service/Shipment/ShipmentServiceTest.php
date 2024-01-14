<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Service\Shipment\ShipmentAdditionalServices;
use VasilDakov\Speedy\Service\Shipment\ShipmentService;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentServiceTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
final class ShipmentServiceTest extends TestCase
{
    protected ShipmentAdditionalServices $additionalServices;

    protected function setUp(): void
    {
        $this->additionalServices = $this->createMock(ShipmentAdditionalServices::class);
        parent::setUp();
    }

    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentService(2002);

        $array = $object->toArray();

        $this->assertArrayHasKey(Property::SERVICE_ID->value, $array);
    }


    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentService(2002);

        // setters
        $object->setServiceId(2002);
        $object->setAutoAdjustPickupDate(true);
        $object->setAdditionalServices($this->additionalServices);
        $object->setDeferredDays(1);
        $object->setSaturdayDelivery(true);
        $object->setPickupDate(new \DateTime());

        // getters
        $this->assertEquals(2002, $object->getServiceId());
        $this->assertTrue($object->isAutoAdjustPickupDate());
        $this->assertEquals(1, $object->getDeferredDays());
        $this->assertTrue($object->isSaturdayDelivery());
        $this->assertInstanceOf(\DateTime::class, $object->getPickupDate());
        $this->assertInstanceOf(ShipmentAdditionalServices::class, $object->getAdditionalServices());


        // array has keys
        $array = $object->toArray();
        $this->assertArrayHasKey(Property::AUTO_ADJUST_PICKUP_DATE->value, $array);
        $this->assertArrayHasKey(Property::ADDITIONAL_SERVICES->value, $array);
        $this->assertArrayHasKey(Property::DEFERRED_DAYS->value, $array);
        $this->assertArrayHasKey(Property::SATURDAY_DELIVERY->value, $array);
        $this->assertArrayHasKey(Property::PICKUP_DATE->value, $array);
    }
}
