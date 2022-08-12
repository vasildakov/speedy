<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Model\CountryCode;

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
     * @var CountryCode|null
     */
    private ?CountryCode $countryId = null;

    /**
     * @var string|null
     */
    private ?string $stateId = null;

    /**
     * @var int
     */
    private int $siteId;

    /**
     * @var string|null
     */
    private ?string $siteType = null;

    /**
     * @var string|null
     */
    private ?string $siteName = null;

    /**
     * @var string|null
     */
    private ?string $postCode = null;

    /**
     * @var int|null
     */
    private ?int $streetId = null;

    /**
     * @var string|null
     */
    private ?string $streetType = null;

    /**
     * @var string|null
     */
    private ?string $streetName = null;

    /**
     * @var string|null
     */
    private ?string $streetNo = null;

    /**
     * @var int|null
     */
    private ?int $complexId = null;

    /**
     * @var string|null
     */
    private ?string $complexType = null;

    /**
     * @var string|null
     */
    private ?string $complexName = null;

    /**
     * @var string|null
     */
    private ?string $blockNo = null;

    /**
     * @var string|null
     */
    private ?string $entranceNo = null;

    /**
     * @var string|null
     */
    private ?string $floorNo = null;

    /**
     * @var string|null
     */
    private ?string $apartmentNo = null;

    /**
     * @var int|null
     */
    private ?int $poiId = null;

    /**
     * @var string|null
     */
    private ?string $addressNote = null;

    /**
     * @var string|null
     */
    private ?string $addressLine1 = null;

    /**
     * @var string|null
     */
    private ?string $addressLine2 = null;

    /**
     * @var float|null
     */
    private ?float $x = null;

    /**
     * @var float|null
     */
    private ?float $y = null;

    /**
     * @param int $siteId
     */
    public function __construct(int $siteId)
    {
        $this->setSiteId($siteId);
    }

    /**
     * @return CountryCode|null
     */
    public function getCountryId(): ?CountryCode
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
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }

    /**
     * @param string $stateId
     * @return self
     */
    public function setStateId(string $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSiteId(): ?int
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
     * @return string|null
     */
    public function getSiteType(): ?string
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
     * @return string|null
     */
    public function getSiteName(): ?string
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
     * @return string|null
     */
    public function getPostCode(): ?string
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
     * @return int|null
     */
    public function getStreetId(): ?int
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
     * @return string|null
     */
    public function getStreetType(): ?string
    {
        return $this->streetType;
    }

    /**
     * @param string $streetType
     */
    public function setStreetType(string $streetType): void
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
     * @param string $streetName
     */
    public function setStreetName(string $streetName): void
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
     * @param string $streetNo
     */
    public function setStreetNo(string $streetNo): void
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
     * @param int $complexId
     */
    public function setComplexId(int $complexId): void
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
     * @param string $complexType
     */
    public function setComplexType(string $complexType): void
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
     * @param string $complexName
     */
    public function setComplexName(string $complexName): void
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
     * @param string $blockNo
     */
    public function setBlockNo(string $blockNo): void
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
     * @param string $entranceNo
     */
    public function setEntranceNo(string $entranceNo): void
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
     * @param string $floorNo
     */
    public function setFloorNo(string $floorNo): void
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
     * @param string $apartmentNo
     */
    public function setApartmentNo(string $apartmentNo): void
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
     * @param int $poiId
     */
    public function setPoiId(int $poiId): void
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
     * @param string $addressNote
     */
    public function setAddressNote(string $addressNote): void
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
     * @param string $addressLine1
     */
    public function setAddressLine1(string $addressLine1): void
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
     * @param string $addressLine2
     */
    public function setAddressLine2(string $addressLine2): void
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
     * @param float $x
     */
    public function setX(float $x): void
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
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        $data = [Speedy::SITE_ID => $this->getSiteId()
        ];

        if (null !== $this->countryId) {
            $data[Speedy::COUNTRY_ID]  = $this->getCountryId();
        }

        if (null !== $this->countryId) {
            $data[Speedy::STATE_ID]  = $this->getStateId();
        }

        if (null !== $this->siteType) {
            $data[Speedy::SITE_TYPE]  = $this->getSiteType();
        }

        if (null !== $this->siteName) {
            $data[Speedy::SITE_NAME]  = $this->getSiteName();
        }

        if (null !== $this->postCode) {
            $data[Speedy::POST_CODE]  = $this->getPostCode();
        }

        if (null !== $this->streetId) {
            $data[Speedy::STREET_ID]  = $this->getStreetId();
        }
        if (null !== $this->streetType) {
            $data[Speedy::STREET_TYPE]  = $this->getStreetType();
        }

        if (null !== $this->streetName) {
            $data[Speedy::STREET_NAME] = $this->getStreetName();
        }

        if (null !== $this->streetNo) {
            $data[Speedy::STREET_NO] = $this->getStreetNo();
        }

        if (null !== $this->complexId) {
            $data[Speedy::COMPLEX_ID] = $this->getComplexId();
        }

        if (null !== $this->complexType) {
            $data[Speedy::COMPLEX_TYPE] = $this->getComplexType();
        }

        if (null !== $this->complexName) {
            $data[Speedy::COMPLEX_NAME] = $this->getComplexName();
        }

        if (null !== $this->blockNo) {
            $data[Speedy::BLOCK_NO] = $this->getBlockNo();
        }

        if (null !== $this->entranceNo) {
            $data[Speedy::ENTRANCE_NO] = $this->getEntranceNo();
        }

        if (null !== $this->floorNo) {
            $data[Speedy::FLOOR_NO] = $this->getFloorNo();
        }

        if (null !== $this->apartmentNo) {
            $data[Speedy::APARTMENT_NO] = $this->getApartmentNo();
        }

        if (null !== $this->poiId) {
            $data[Speedy::POI_ID] = $this->getPoiId();
        }

        if (null !== $this->addressNote) {
            $data[Speedy::ADDRESS_NOTE] = $this->getAddressNote();
        }

        if (null !== $this->addressLine1) {
            $data[Speedy::ADDRESS_LINE_1] = $this->getAddressLine1();
        }

        if (null !== $this->addressLine2) {
            $data[Speedy::ADDRESS_LINE_2] = $this->getAddressLine2();
        }

        if (null !== $this->x) {
            $data[Speedy::X] = $this->getX();
        }
        if (null !== $this->y) {
            $data[Speedy::Y] = $this->getY();
        }


        return $data;
    }
}

