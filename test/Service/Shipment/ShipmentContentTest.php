<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\ShipmentContent;
use VasilDakov\Speedy\Service\Shipment\ShipmentParcel;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentContentTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentContentTest extends TestCase
{
    protected int $parcelsCount;
    protected float $totalWeight;
    protected string $contents;
    protected string $package;
    protected ShipmentParcel $parcel;
    protected bool $palletized;
    protected bool $documents;
    protected bool $pendingParcels;
    protected bool $exciseGoods;

    protected function setUp(): void
    {
        $this->parcelsCount = 1;
        $this->totalWeight = 3.5;
        $this->contents = "Some content";
        $this->package = "Package";
        $this->parcel = $this->createMock(ShipmentParcel::class);
        $this->palletized = true;
        $this->documents = true;
        $this->pendingParcels = true;
        $this->exciseGoods = true;

        parent::setUp();
    }

    private function getShipmentContent(): ShipmentContent
    {
        return new ShipmentContent(
            $this->parcelsCount,
            $this->totalWeight,
            $this->contents,
            $this->package,
            $this->parcel
        );
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanBeCreated(): void
    {
        $object = new ShipmentContent(
            $this->parcelsCount,
            $this->totalWeight,
            $this->contents,
            $this->package,
            $this->parcel
        );

        $this->assertInstanceOf(ShipmentContent::class, $object);
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheParcelsCount(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->parcelsCount, $object->getParcelsCount());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheTotalWeight(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->totalWeight, $object->getTotalWeight());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheContents(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->contents, $object->getContents());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveThePackage(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->package, $object->getPackage());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheParcel(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->parcel, $object->getParcel());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsDocument(): void
    {
        $object = $this->getShipmentContent();

        $object->setDocuments();

        $this->assertEquals($this->documents, $object->isDocuments());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsPalletized(): void
    {
        $object = $this->getShipmentContent();

        $object->setPalletized();

        $this->assertEquals($this->palletized, $object->isPalletized());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsPendingParcels(): void
    {
        $object = $this->getShipmentContent();

        $object->setPendingParcels();

        $this->assertEquals($this->pendingParcels, $object->isPendingParcels());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsExciseGoods(): void
    {
        $object = $this->getShipmentContent();

        $object->setExciseGoods();

        $this->assertEquals($this->exciseGoods, $object->isExciseGoods());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testItCanBeConvertedAsArray(): void
    {
        $object = $this->getShipmentContent();

        $this->assertIsArray($object->toArray());
    }

    /**
     * @return void
     * @group ShipmentContent
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = $this->getShipmentContent();

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::PARCEL, $array);
        $this->assertArrayHasKey(Speedy::PARCELS_COUNT, $array);
        $this->assertArrayHasKey(Speedy::TOTAL_WEIGHT, $array);
        $this->assertArrayHasKey(Speedy::CONTENTS, $array);
        $this->assertArrayHasKey(Speedy::PACKAGE, $array);
        //$this->assertArrayHasKey(Speedy::PALLETIZED, $array);
        //$this->assertArrayHasKey(Speedy::DOCUMENTS, $array);
        //$this->assertArrayHasKey(Speedy::PENDING_PARCELS, $array);
    }
}