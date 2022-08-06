<?php
declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\ValueObject\CountryCode;

/**
 * Class ShipmentAddressTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentAddressTest extends TestCase
{
    /**
     * @var CountryCode
     */
    protected CountryCode $countryId;

    /**
     * @var string
     */
    protected string $stateId;

    /**
     * @var int
     */
    protected int $siteId;

    /**
     * @var string
     */
    protected string $siteType;

    /**
     * @var string
     */
    protected string $siteName;

    /**
     * @var string
     */
    protected string $postCode;

    /**
     * @var int
     */
    protected int $streetId;

    /**
     * @var string
     */
    protected string $streetType;

    /**
     * @var string
     */
    protected string $streetName;

    /**
     * @var string
     */
    protected string $streetNo;

    /**
     * @var int
     */
    protected int $complexId;

    /**
     * @var string
     */
    protected string $complexType;

    /**
     * @var string
     */
    protected string $complexName;

    /**
     * @var string
     */
    protected string $blockNo;

    /**
     * @var string
     */
    protected string $entranceNo;

    /**
     * @var string
     */
    protected string $floorNo;

    /**
     * @var string
     */
    protected string $apartmentNo;

    /**
     * @var int
     */
    protected int $poiId;

    /**
     * @var string
     */
    protected string $addressNote;

    /**
     * @var string
     */
    protected string $addressLine1;

    /**
     * @var string
     */
    protected string $addressLine2;

    /**
     * @var float
     */
    protected float $x;

    /**
     * @var float
     */
    protected float $y;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->countryId = $this->createMock(CountryCode::class);
        $this->stateId   = 'StateId';
        $this->siteId = 100;
        $this->siteType = 'SiteType';
        $this->siteName  = 'SiteName';
        $this->postCode  = '1000';
        $this->streetId = 5;
        $this->streetType = 'StreetType';
        $this->streetName = 'StreetName';
        $this->streetNo = 'StreetNo';
        $this->complexId = 123;
        $this->complexType = 'ComplexType';
        $this->complexName = 'ComplexName';
        $this->blockNo = 'BlockNo';
        $this->entranceNo = 'EntranceNo';
        $this->floorNo = 'FloorNo';
        $this->apartmentNo = 'ApartmentNo';
        $this->poiId = 789;
        $this->addressNote = 'AddressNote';
        $this->addressLine1 = 'AddressLine1';
        $this->addressLine2 = 'AddressLine2';
        $this->x = 3.14;
        $this->y = 1.618;

        parent::setUp();
    }

    public function testItCanExportToArrayWithMandatoryProperty(): void // Indirectly testing the construct
    {
        $object = new ShipmentAddress($this->siteId);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::SITE_ID, $array);
    }

    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentAddress($this->siteId);

        $object->setCountryId($this->countryId);
        $object->setStateId($this->stateId);
        $object->setSiteType($this->siteType);
        $object->setSiteName($this->siteName);
        $object->setPostCode($this->postCode);
        $object->setStreetId($this->streetId);
        $object->setStreetType($this->streetType);
        $object->setStreetName($this->streetName);
        $object->setStreetNo($this->streetNo);
        $object->setComplexId($this->complexId);
        $object->setComplexType($this->complexType);
        $object->setComplexName($this->complexName);
        $object->setBlockNo($this->blockNo);
        $object->setEntranceNo($this->entranceNo);
        $object->setFloorNo($this->floorNo);
        $object->setApartmentNo($this->apartmentNo);
        $object->setPoiId($this->poiId);
        $object->setAddressNote($this->addressNote);
        $object->setAddressLine1($this->addressLine1);
        $object->setAddressLine2($this->addressLine2);
        $object->setX($this->x);
        $object->setY($this->y);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::COUNTRY_ID, $array);
        $this->assertArrayHasKey(Speedy::STATE_ID, $array);
        $this->assertArrayHasKey(Speedy::SITE_TYPE, $array);
        $this->assertArrayHasKey(Speedy::SITE_NAME, $array);
        $this->assertArrayHasKey(Speedy::POST_CODE, $array);
        $this->assertArrayHasKey(Speedy::STREET_ID, $array);
        $this->assertArrayHasKey(Speedy::STREET_TYPE, $array);
        $this->assertArrayHasKey(Speedy::STREET_NAME, $array);
        $this->assertArrayHasKey(Speedy::STREET_NO, $array);
        $this->assertArrayHasKey(Speedy::COMPLEX_ID, $array);
        $this->assertArrayHasKey(Speedy::COMPLEX_TYPE, $array);
        $this->assertArrayHasKey(Speedy::COMPLEX_NAME, $array);
        $this->assertArrayHasKey(Speedy::BLOCK_NO, $array);
        $this->assertArrayHasKey(Speedy::ENTRANCE_NO, $array);
        $this->assertArrayHasKey(Speedy::FLOOR_NO, $array);
        $this->assertArrayHasKey(Speedy::APARTMENT_NO, $array);
        $this->assertArrayHasKey(Speedy::POI_ID, $array);
        $this->assertArrayHasKey(Speedy::ADDRESS_NOTE, $array);
        $this->assertArrayHasKey(Speedy::ADDRESS_LINE_1, $array);
        $this->assertArrayHasKey(Speedy::ADDRESS_LINE_2, $array);
        $this->assertArrayHasKey(Speedy::X, $array);
        $this->assertArrayHasKey(Speedy::Y, $array);
    }


//
//    public function testItCanBeConvertedAsArray(): void
//    {
//        $object = new ShipmentAddress($this->siteId);
//
//        $this->assertIsArray($object->toArray());
//    }
}
