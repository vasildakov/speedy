<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentParcel;
use VasilDakov\Speedy\Shipment\ShipmentParcelSize;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentParcelTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentParcelTest extends TestCase
{

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var int
     */
    protected int $seqNo;

    /**
     * @var int
     */
    protected int $packageUniqueNumber;

    /**
     * @var ShipmentParcelSize
     */
    protected ShipmentParcelSize $size;

    /**
     * @var float
     */
    protected float $weight;

    /**
     * @var string
     */
    protected string $externalCarrierParcelNumber;

    /**
     * @var string
     */
    protected string $ref1;

    /**
     * @var string
     */
    protected string $ref2;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->id = 'id';
        $this->seqNo = 5;
        $this->packageUniqueNumber = 6;
        $this->size = $this->createMock(ShipmentParcelSize::class);
        $this->weight = 6.1;
        $this->externalCarrierParcelNumber = "externalCarrierParcelNumber";
        $this->ref1 = 'ref1';
        $this->ref2 = 'ref2';

        parent::setUp();
    }

    /**
     * @return void
     */
    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentParcel($this->seqNo, $this->size);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::SEQ_NO, $array);
        $this->assertArrayHasKey(Speedy::SIZE, $array);
    }

    /**
     * @return void
     */
    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentParcel($this->seqNo, $this->size);

        $object->setId($this->id);
        $object->setPackageUniqueNumber($this->packageUniqueNumber);
        $object->setWeight($this->weight);
        $object->setExternalCarrierParcelNumber($this->externalCarrierParcelNumber);
        $object->setRef1($this->ref1);
        $object->setRef2($this->ref2);

        //$this->assertEquals($this->id, $object->getId());

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::ID, $array);
        $this->assertArrayHasKey(Speedy::PACKAGE_UNIQUE_NUMBER, $array);
        $this->assertArrayHasKey(Speedy::WEIGHT, $array);
        $this->assertArrayHasKey(Speedy::EXTERNAL_CARRIER_PARCEL_NUMBER, $array);
        $this->assertArrayHasKey(Speedy::REF_1, $array);
        $this->assertArrayHasKey(Speedy::REF_2, $array); 
    }
}