<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentAddress.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 *
 * @Serializer\AccessType("public_method")
 */
class ShipmentAddress
{
    use ToArray;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $countryId = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $stateId = null;

    /**
     * @Serializer\Type("integer")
     */
    private int $siteId;

    /**
     * @Serializer\Type("string")
     */
    private ?string $siteType = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $siteName = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $postCode = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $streetId = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $streetType = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $streetName = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $streetNo = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $complexId = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $complexType = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $complexName = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $blockNo = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $entranceNo = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $floorNo = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $apartmentNo = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $poiId = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $addressNote = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $addressLine1 = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $addressLine2 = null;

    /**
     * @Serializer\Type("float")
     */
    private ?float $x = null;

    /**
     * @Serializer\Type("float")
     */
    private ?float $y = null;

    public function __construct(int $siteId, int $complexId = null, int $streetId = null, string $streetNo = null)
    {
        $this->siteId = $siteId;
        $this->complexId = $complexId;
        $this->streetId = $streetId;
        $this->streetNo = $streetNo;
    }

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function setCountryId(int $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getStateId(): ?string
    {
        return $this->stateId;
    }

    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    public function getSiteType(): ?string
    {
        return $this->siteType;
    }

    public function setSiteType(string $siteType): void
    {
        $this->siteType = $siteType;
    }

    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    public function setSiteName(string $siteName): void
    {
        $this->siteName = $siteName;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }

    public function getStreetId(): ?int
    {
        return $this->streetId;
    }

    public function setStreetId(int $streetId): void
    {
        $this->streetId = $streetId;
    }

    public function getStreetType(): ?string
    {
        return $this->streetType;
    }

    public function setStreetType(string $streetType): void
    {
        $this->streetType = $streetType;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(string $streetName): void
    {
        $this->streetName = $streetName;
    }

    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }

    public function setStreetNo(string $streetNo): void
    {
        $this->streetNo = $streetNo;
    }

    public function getComplexId(): ?int
    {
        return $this->complexId;
    }

    /**
     * @param ?int $complexId
     */
    public function setComplexId(?int $complexId): void
    {
        $this->complexId = $complexId;
    }

    public function getComplexType(): ?string
    {
        return $this->complexType;
    }

    /**
     * @param ?string $complexType
     */
    public function setComplexType(?string $complexType): void
    {
        $this->complexType = $complexType;
    }

    public function getComplexName(): ?string
    {
        return $this->complexName;
    }

    public function setComplexName(string $complexName): void
    {
        $this->complexName = $complexName;
    }

    public function getBlockNo(): ?string
    {
        return $this->blockNo;
    }

    public function setBlockNo(string $blockNo): void
    {
        $this->blockNo = $blockNo;
    }

    public function getEntranceNo(): ?string
    {
        return $this->entranceNo;
    }

    public function setEntranceNo(string $entranceNo): void
    {
        $this->entranceNo = $entranceNo;
    }

    public function getFloorNo(): ?string
    {
        return $this->floorNo;
    }

    public function setFloorNo(string $floorNo): void
    {
        $this->floorNo = $floorNo;
    }

    public function getApartmentNo(): ?string
    {
        return $this->apartmentNo;
    }

    public function setApartmentNo(string $apartmentNo): void
    {
        $this->apartmentNo = $apartmentNo;
    }

    public function getPoiId(): ?int
    {
        return $this->poiId;
    }

    /**
     * @param ?int $poiId
     */
    public function setPoiId(?int $poiId): void
    {
        $this->poiId = $poiId;
    }

    public function getAddressNote(): ?string
    {
        return $this->addressNote;
    }

    public function setAddressNote(string $addressNote): void
    {
        $this->addressNote = $addressNote;
    }

    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    public function setAddressLine1(string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    public function setAddressLine2(string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(float $x): void
    {
        $this->x = $x;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(float $y): void
    {
        $this->y = $y;
    }
}
