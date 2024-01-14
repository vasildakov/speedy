<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Service\Shipment\ShipmentContent;
use VasilDakov\Speedy\Service\Shipment\ShipmentParcel;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentContentTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
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
        $this->contents = 'Some content';
        $this->package = 'Package';
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
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheParcelsCount(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->parcelsCount, $object->getParcelsCount());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheTotalWeight(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->totalWeight, $object->getTotalWeight());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheContents(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->contents, $object->getContents());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveThePackage(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->package, $object->getPackage());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveTheParcel(): void
    {
        $object = $this->getShipmentContent();

        $this->assertEquals($this->parcel, $object->getParcel());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsDocument(): void
    {
        $object = $this->getShipmentContent();

        $object->setDocuments();

        $this->assertEquals($this->documents, $object->isDocuments());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsPalletized(): void
    {
        $object = $this->getShipmentContent();

        $object->setPalletized();

        $this->assertEquals($this->palletized, $object->isPalletized());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsPendingParcels(): void
    {
        $object = $this->getShipmentContent();

        $object->setPendingParcels();

        $this->assertEquals($this->pendingParcels, $object->isPendingParcels());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanRetrieveIsExciseGoods(): void
    {
        $object = $this->getShipmentContent();

        $object->setExciseGoods();

        $this->assertEquals($this->exciseGoods, $object->isExciseGoods());
    }

    /**
     * @group ShipmentContent
     */
    public function testItCanBeConvertedAsArray(): void
    {
        $object = $this->getShipmentContent();

        $this->assertIsArray($object->toArray());
    }

    /**
     * @group ShipmentContent
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = $this->getShipmentContent();

        $array = $object->toArray();

        $this->assertArrayHasKey(Property::PARCEL->value, $array);
        $this->assertArrayHasKey(Property::PARCELS_COUNT->value, $array);
        $this->assertArrayHasKey(Property::TOTAL_WEIGHT->value, $array);
        $this->assertArrayHasKey(Property::CONTENTS->value, $array);
        $this->assertArrayHasKey(Property::PACKAGE->value, $array);
        // $this->assertArrayHasKey(Speedy::PALLETIZED, $array);
        // $this->assertArrayHasKey(Speedy::DOCUMENTS, $array);
        // $this->assertArrayHasKey(Speedy::PENDING_PARCELS, $array);
    }
}
