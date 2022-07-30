<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\ValueObject\CountryCode;

/**
 * Class ShipmentAddress
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentAddress
{
    /**
     * @var CountryCode
     */
    private CountryCode $countryId;

    /**
     * @var string
     */
    private string $stateId;

    /**
     * @var int
     */
    private int $siteId;

    /**
     * @var string
     */
    private string $siteType;

    /**
     * @var string
     */
    private string $siteName;

    /**
     * @var string
     */
    private string $postCode;

    /**
     * @var int
     */
    private int $streetId;

    /**
     * @var string
     */
    private string $streetName;

    /**
     * @var string
     */
    private string $streetNo;

    /**
     * @var int
     */
    private int $complexId;

    /**
     * @var string
     */
    private string $complexType;

    /**
     * @var string
     */
    private string $complexName;

    /**
     * @var string
     */
    private string $blockNo;

    /**
     * @var string
     */
    private string $entranceNo;

    /**
     * @var string
     */
    private string $floorNo;

    /**
     * @var string
     */
    private string $apartmentNo;

    /**
     * @var int
     */
    private int $poiId;

    /**
     * @var string
     */
    private string $addressNote;

    /**
     * @var string
     */
    private string $addressLine1;

    /**
     * @var string
     */
    private string $addressLine2;

    /**
     * @var float
     */
    private float $x;

    /**
     * @var float
     */
    private float $y;

    /**
     * @param int $siteId
     */
    public function __construct(int $siteId)
    {
        $this->setSiteId($siteId);
    }

    /**
     * @return CountryCode
     */
    public function getCountryId(): CountryCode
    {
        return $this->countryId;
    }

    /**
     * @param CountryCode $countryId
     * @return self
     */
    public function setCountryId(CountryCode $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStateId(): string
    {
        return $this->stateId;
    }

    /**
     * @param string $stateId
     */
    public function setStateId(string $stateId): void
    {
        $this->stateId = $stateId;
    }

    /**
     * @return int
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     */
    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * @return string
     */
    public function getSiteType(): string
    {
        return $this->siteType;
    }

    /**
     * @param string $siteType
     */
    public function setSiteType(string $siteType): void
    {
        $this->siteType = $siteType;
    }

    /**
     * @return string
     */
    public function getSiteName(): string
    {
        return $this->siteName;
    }

    /**
     * @param string $siteName
     */
    public function setSiteName(string $siteName): void
    {
        $this->siteName = $siteName;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     */
    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * @return int
     */
    public function getStreetId(): int
    {
        return $this->streetId;
    }

    /**
     * @param int $streetId
     */
    public function setStreetId(int $streetId): void
    {
        $this->streetId = $streetId;
    }

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     */
    public function setStreetName(string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * @return string
     */
    public function getStreetNo(): string
    {
        return $this->streetNo;
    }

    /**
     * @param string $streetNo
     */
    public function setStreetNo(string $streetNo): void
    {
        $this->streetNo = $streetNo;
    }

    /**
     * @return int
     */
    public function getComplexId(): int
    {
        return $this->complexId;
    }

    /**
     * @param int $complexId
     */
    public function setComplexId(int $complexId): void
    {
        $this->complexId = $complexId;
    }

    /**
     * @return string
     */
    public function getComplexType(): string
    {
        return $this->complexType;
    }

    /**
     * @param string $complexType
     */
    public function setComplexType(string $complexType): void
    {
        $this->complexType = $complexType;
    }

    /**
     * @return string
     */
    public function getComplexName(): string
    {
        return $this->complexName;
    }

    /**
     * @param string $complexName
     */
    public function setComplexName(string $complexName): void
    {
        $this->complexName = $complexName;
    }

    /**
     * @return string
     */
    public function getBlockNo(): string
    {
        return $this->blockNo;
    }

    /**
     * @param string $blockNo
     */
    public function setBlockNo(string $blockNo): void
    {
        $this->blockNo = $blockNo;
    }

    /**
     * @return string
     */
    public function getEntranceNo(): string
    {
        return $this->entranceNo;
    }

    /**
     * @param string $entranceNo
     */
    public function setEntranceNo(string $entranceNo): void
    {
        $this->entranceNo = $entranceNo;
    }

    /**
     * @return string
     */
    public function getFloorNo(): string
    {
        return $this->floorNo;
    }

    /**
     * @param string $floorNo
     */
    public function setFloorNo(string $floorNo): void
    {
        $this->floorNo = $floorNo;
    }

    /**
     * @return string
     */
    public function getApartmentNo(): string
    {
        return $this->apartmentNo;
    }

    /**
     * @param string $apartmentNo
     */
    public function setApartmentNo(string $apartmentNo): void
    {
        $this->apartmentNo = $apartmentNo;
    }

    /**
     * @return int
     */
    public function getPoiId(): int
    {
        return $this->poiId;
    }

    /**
     * @param int $poiId
     */
    public function setPoiId(int $poiId): void
    {
        $this->poiId = $poiId;
    }

    /**
     * @return string
     */
    public function getAddressNote(): string
    {
        return $this->addressNote;
    }

    /**
     * @param string $addressNote
     */
    public function setAddressNote(string $addressNote): void
    {
        $this->addressNote = $addressNote;
    }

    /**
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     */
    public function setAddressLine1(string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }

    /**
     * @param string $addressLine2
     */
    public function setAddressLine2(string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

    /**
     * @param int $siteId
     */




    /**
     * @return array
     */
    public function toArray(): array
    {
        return [

        ];
    }
}
