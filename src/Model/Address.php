<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Address
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 * @Serializer\AccessType("public_method")
 */
class Address
{
    use ToArray;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $countryId = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $stateId = null;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     *
     */
    private ?int $siteId = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $siteType = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $siteName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $postCode = null;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $streetId = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $streetType = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $streetName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $streetNo = null;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $complexId = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $complexType = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $complexName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $blockNo = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $entranceNo = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $floorNo = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $apartmentNo = null;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $poiId = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $addressNote = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $addressLine1 = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $addressLine2 = null;

    /**
     * @var float|null
     * @Serializer\Type("float")
     */
    private ?float $x = null;

    /**
     * @var float|null
     * @Serializer\Type("float")
     */
    private ?float $y = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $fullAddressString = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $siteAddressString = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $localAddressString = null;

    /**
     * @param int $siteId
     */
    public function __construct(int $siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    /**
     * @param int|null $countryId
     */
    public function setCountryId(?int $countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }

    /**
     * @param string|null $stateId
     */
    public function setStateId(?string $stateId): void
    {
        $this->stateId = $stateId;
    }

    /**
     * @param int|null $siteId
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * @return int|null
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * @return string|null
     */
    public function getSiteType(): ?string
    {
        return $this->siteType;
    }

    /**
     * @param string|null $siteType
     */
    public function setSiteType(?string $siteType): void
    {
        $this->siteType = $siteType;
    }

    /**
     * @return string|null
     */
    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    /**
     * @param string|null $siteName
     */
    public function setSiteName(?string $siteName): void
    {
        $this->siteName = $siteName;
    }

    /**
     * @return string|null
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * @param string|null $postCode
     */
    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * @return int|null
     */
    public function getStreetId(): ?int
    {
        return $this->streetId;
    }

    /**
     * @param int|null $streetId
     */
    public function setStreetId(?int $streetId): void
    {
        $this->streetId = $streetId;
    }

    /**
     * @return string|null
     */
    public function getStreetType(): ?string
    {
        return $this->streetType;
    }

    /**
     * @param string|null $streetType
     */
    public function setStreetType(?string $streetType): void
    {
        $this->streetType = $streetType;
    }

    /**
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param string|null $streetName
     */
    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }

    /**
     * @param string|null $streetNo
     */
    public function setStreetNo(?string $streetNo): void
    {
        $this->streetNo = $streetNo;
    }

    /**
     * @return int|null
     */
    public function getComplexId(): ?int
    {
        return $this->complexId;
    }

    /**
     * @param int|null $complexId
     */
    public function setComplexId(?int $complexId): void
    {
        $this->complexId = $complexId;
    }

    /**
     * @return string|null
     */
    public function getComplexType(): ?string
    {
        return $this->complexType;
    }

    /**
     * @param string|null $complexType
     */
    public function setComplexType(?string $complexType): void
    {
        $this->complexType = $complexType;
    }

    /**
     * @return string|null
     */
    public function getComplexName(): ?string
    {
        return $this->complexName;
    }

    /**
     * @param string|null $complexName
     */
    public function setComplexName(?string $complexName): void
    {
        $this->complexName = $complexName;
    }

    /**
     * @return string|null
     */
    public function getBlockNo(): ?string
    {
        return $this->blockNo;
    }

    /**
     * @param string|null $blockNo
     */
    public function setBlockNo(?string $blockNo): void
    {
        $this->blockNo = $blockNo;
    }

    /**
     * @return string|null
     */
    public function getEntranceNo(): ?string
    {
        return $this->entranceNo;
    }

    /**
     * @param string|null $entranceNo
     */
    public function setEntranceNo(?string $entranceNo): void
    {
        $this->entranceNo = $entranceNo;
    }

    /**
     * @return string|null
     */
    public function getFloorNo(): ?string
    {
        return $this->floorNo;
    }

    /**
     * @param string|null $floorNo
     */
    public function setFloorNo(?string $floorNo): void
    {
        $this->floorNo = $floorNo;
    }

    /**
     * @return string|null
     */
    public function getApartmentNo(): ?string
    {
        return $this->apartmentNo;
    }

    /**
     * @param string|null $apartmentNo
     */
    public function setApartmentNo(?string $apartmentNo): void
    {
        $this->apartmentNo = $apartmentNo;
    }

    /**
     * @return int|null
     */
    public function getPoiId(): ?int
    {
        return $this->poiId;
    }

    /**
     * @param int|null $poiId
     */
    public function setPoiId(?int $poiId): void
    {
        $this->poiId = $poiId;
    }

    /**
     * @return string|null
     */
    public function getAddressNote(): ?string
    {
        return $this->addressNote;
    }

    /**
     * @param string|null $addressNote
     */
    public function setAddressNote(?string $addressNote): void
    {
        $this->addressNote = $addressNote;
    }

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @param string|null $addressLine1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string|null $addressLine2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return float|null
     */
    public function getX(): ?float
    {
        return $this->x;
    }

    /**
     * @param float|null $x
     */
    public function setX(?float $x): void
    {
        $this->x = $x;
    }

    /**
     * @return float|null
     */
    public function getY(): ?float
    {
        return $this->y;
    }

    /**
     * @param float|null $y
     */
    public function setY(?float $y): void
    {
        $this->y = $y;
    }

    /**
     * @param string|null $fullAddressString
     */
    public function setFullAddressString(?string $fullAddressString): void
    {
        $this->fullAddressString = $fullAddressString;
    }

    /**
     * @return string|null
     */
    public function getFullAddressString(): ?string
    {
        return $this->fullAddressString;
    }

    /**
     * @return string|null
     */
    public function getSiteAddressString(): ?string
    {
        return $this->siteAddressString;
    }

    /**
     * @param ?string $siteAddressString
     */
    public function setSiteAddressString(?string $siteAddressString): void
    {
        $this->siteAddressString = $siteAddressString;
    }

    /**
     * @return string|null
     */
    public function getLocalAddressString(): ?string
    {
        return $this->localAddressString;
    }

    /**
     * @param string $localAddressString
     */
    public function setLocalAddressString(string $localAddressString): void
    {
        $this->localAddressString = $localAddressString;
    }
}
