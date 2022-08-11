<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Client;

/**
 * Class Address
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Address
{

    /**
     * @var int|null
     */
    private ?int $countryId = null;

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
     * @return int|null
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * @param int|null $siteId
     */
    public function setSiteId(?int $siteId): void
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
     * @return string|null
     */
    public function getFullAddressString(): ?string
    {
        return $this->fullAddressString;
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
    public function getSiteAddressString(): ?string
    {
        return $this->siteAddressString;
    }

    /**
     * @param string|null $siteAddressString
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
     * @param string|null $localAddressString
     */
    public function setLocalAddressString(?string $localAddressString): void
    {
        $this->localAddressString = $localAddressString;
    }

    /**
     * @var int|null
     */
    private ?int $siteId;

    /**
     * @var string|null
     */
    private ?string $siteType;

    /**
     * @var string|null
     */
    private ?string $siteName = null;

    /**
     * @var string|null
     */
    private ?string $postCode;

    /**
     * @var int|null
     */
    private ?int $streetId;

    /**
     * @var string|null
     */
    private ?string $streetType;

    /**
     * @var string|null
     */
    private ?string $streetName;

    /**
     * @var string|null
     */
    private ?string $streetNo;

    /**
     * @var string|null
     */
    private ?string $entranceNo;

    /**
     * @var string|null
     */
    private ?string $floorNo;

    /**
     * @var float|null
     */
    private ?float $x;

    /**
     * @var float|null
     */
    private ?float $y;

    /**
     * @var string|null
     */
    private ?string $apartmentNo;

    /**
     * @var string|null
     */
    private ?string $fullAddressString;

    /**
     * @var string|null
     */
    private ?string $siteAddressString;

    /**
     * @var string|null
     */
    private ?string $localAddressString;



    public function toArray()
    {
        return [];
    }

}