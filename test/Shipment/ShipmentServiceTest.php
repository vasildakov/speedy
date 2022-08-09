<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use DateTime;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentAdditionalServices;
use VasilDakov\Speedy\Shipment\ShipmentService;
use VasilDakov\Speedy\Speedy;

/**
 * Class SipmentServiceTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentServiceTest extends TestCase
{
    /**
     * @var DateTime
     */
    protected DateTime $pickupDate;

    /**
     * @var bool
     */
    protected bool $autoAdjustPickupDate = false;

    /**
     * @var int
     */
    protected int $serviceId;

    /**
     * @var ShipmentAdditionalServices
     */
    protected ShipmentAdditionalServices $additionalServices;

    /**
     * @var int
     */
    protected int $deferredDays;

    /**
     * @var bool
     */
    protected bool $saturdayDelivery = false;

    protected function setUp(): void
    {
        $this->pickupDate = $this->createMock(DateTime::class);
        $this->autoAdjustPickupDate = false;
        $this->serviceId = 5;
        $this->additionalServices = $this->createMock(ShipmentAdditionalServices::class);
        $this->deferredDays = 6;
        $this->saturdayDelivery = false;


        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentService($this->serviceId);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::SERVICE_ID, $array);
    }

    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentService($this->serviceId);

        $object->setAutoAdjustPickupDate($this->autoAdjustPickupDate);
        $object->setAdditionalServices($this->additionalServices);
        $object->setDeferredDays($this->deferredDays);
        $object->setSaturdayDelivery($this->saturdayDelivery);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::AUTO_ADJUST_PICKUP_DATE, $array);
        $this->assertArrayHasKey(Speedy::ADDITIONAL_SERVICES, $array);
        $this->assertArrayHasKey(Speedy::DEFERRED_DAYS, $array);
        $this->assertArrayHasKey(Speedy::SATURDAY_DELIVERY, $array);
    }
}