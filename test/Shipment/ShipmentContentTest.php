<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentContent;
use VasilDakov\Speedy\Shipment\ShipmentParcel;

/**
 * Class ShipmentContentTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentContentTest extends TestCase
{
    protected function setUp(): void
    {
        $this->parcelsCount = 1;
        $this->totalWeight = 3.5;
        $this->contents = "Some content";
        $this->package = "Package";
        $this->parcel = $this->createMock(ShipmentParcel::class);
        $this->palletized = True;
        $this->documents = True;
        $this->pendingParcels = True;
        $this->exciseGoods = True;

        parent::setUp();
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanBeCreated() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $this->assertInstanceOf(ShipmentContent::class, $object);
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveTheParcelsCount() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $this->assertEquals($this->parcelsCount, $object->getParcelsCount());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveTheTotalWeight() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $this->assertEquals($this->totalWeight, $object->getTotalWeight());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveTheContents() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $this->assertEquals($this->contents, $object->getContents());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveThePackage() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $this->assertEquals($this->package, $object->getPackage());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveTheParcel() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $this->assertEquals($this->parcel, $object->getParcel());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveIsDocument() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $object->setDocuments();

        $this->assertEquals($this->documents, $object->isDocuments());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveIsPalletized() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $object->setPalletized($this->palletized);

        $this->assertEquals($this->palletized, $object->isPalletized());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveIsPendingParcels() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $object->setPendingParcels();

        $this->assertEquals($this->pendingParcels, $object->isPendingParcels());
    }

    /**
     * @return void
     * * &group ShipmentContent
     */
    public function testItCanRetrieveIsExciseGoods() :void
    {
        $object = new ShipmentContent($this->parcelsCount, $this->totalWeight, $this->contents, $this->package, $this->parcel);

        $object->setExciseGoods($this->exciseGoods);

        $this->assertEquals($this->exciseGoods, $object->isExciseGoods());
    }
}