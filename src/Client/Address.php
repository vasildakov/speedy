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
     * @var int
     */
    private int $countryId;

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
    private string $streetType;

    /**
     * @var string
     */
    private string $streetName;

    /**
     * @var string
     */
    private string $streetNo;

    /**
     * @var string
     */
    private string $entranceNo;

    /**
     * @var string
     */
    private string $floorNo;

    /**
     * @var float|null
     */
    private float $x;

    /**
     * @var float|null
     */
    private float $y;

    /**
     * @var string
     */
    private string $apartmentNo;

    /**
     * @var string
     */
    private string $fullAddressString;

    /**
     * @var string
     */
    private string $siteAddressString;

    /**
     * @var string
     */
    private string $localAddressString;


    /* public function __construct(
        int $countryId,
        int $siteId,
        string $siteType,
        string $siteName,
        string $postCode,
        int $streetId,
        string $streetType,
        string $streetName,
        string $streetNo,
        string $entranceNo,
        string $floorNo,
        string $apartmentNo,
        float $x,
        float $y,
        string $fullAddressString,
        string $siteAddressString,
        string $localAddressString
    ) {
        $this->countryId = $countryId;
        $this->siteId = $siteId;
        $this->siteType = $siteType;
        $this->siteName = $siteName;
        $this->postCode = $postCode;
        $this->streetId = $streetId;
        $this->streetType = $streetType;
        $this->streetName = $streetName;
        $this->streetNo = $streetNo;
        $this->entranceNo = $entranceNo;
        $this->floorNo = $floorNo;
        $this->apartmentNo = $apartmentNo;
        $this->x = $x;
        $this->y = $y;
        $this->fullAddressString = $fullAddressString;
        $this->siteAddressString = $siteAddressString;
        $this->localAddressString = $localAddressString;
    } */

    public function setCountryId(int $countryId)
    {
        $this->countryId = $countryId;
    }

    public function getCountryId(): int
    {
        return $this->countryId;
    }

    public function setSiteId(int $siteId)
    {
        $this->siteId = $siteId;
    }

    public function getSiteId(): int
    {
        return $this->siteId;
    }

    public function setSiteType(string $siteType)
    {
        $this->siteType = $siteType;
    }

    public function getSiteType(): string
    {
        return $this->siteType;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function getStreetId()
    {
        return $this->streetId;
    }

    public function getStreetType()
    {
        return $this->streetType;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function getStreetNo()
    {
        return $this->streetNo;
    }

    public function getEntranceNo()
    {
        return $this->entranceNo;
    }

    public function getFloorNo()
    {
        return $this->floorNo;
    }

    public function getApartmentNo()
    {
        return $this->apartmentNo;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getFullAddressString()
    {
        return $this->fullAddressString;
    }

    public function getSiteAddressString()
    {
        return $this->siteAddressString;
    }

    public function getLocalAddressString()
    {
        return $this->localAddressString;
    }

    public function toArray()
    {
        return [];
    }

}