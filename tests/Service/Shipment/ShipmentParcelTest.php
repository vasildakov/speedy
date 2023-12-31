<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\ShipmentParcel;
use VasilDakov\Speedy\Service\Shipment\ShipmentParcelSize;

/**
 * Class ShipmentParcelTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class ShipmentParcelTest extends TestCase
{
    protected string $id;

    protected int $seqNo;

    protected int $packageUniqueNumber;

    protected ShipmentParcelSize $size;

    protected float $weight;

    protected string $externalCarrierParcelNumber;

    protected string $ref1;

    protected string $ref2;

    protected function setUp(): void
    {
        $this->id = 'id';
        $this->seqNo = 5;
        $this->packageUniqueNumber = 6;
        $this->size = $this->createMock(ShipmentParcelSize::class);
        $this->weight = 6.1;
        $this->externalCarrierParcelNumber = 'externalCarrierParcelNumber';
        $this->ref1 = 'ref1';
        $this->ref2 = 'ref2';

        parent::setUp();
    }

    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentParcel();

        $array = $object->toArray();

        $this->assertIsArray($array);

        // $this->assertArrayHasKey(Speedy::SEQ_NO, $array);
        // $this->assertArrayHasKey(Speedy::SIZE, $array);
    }

    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentParcel();

        $object->setId($this->id);
        $object->setPackageUniqueNumber($this->packageUniqueNumber);

        $this->assertEquals($this->id, $object->getId());
        /*
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
        $this->assertArrayHasKey(Speedy::REF_2, $array);  */
    }
}
