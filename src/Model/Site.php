<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class Site
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Site
{
    /**
     * @var int|null
     */
    private ?int $id = null;

    /**
     * @var int
     */
    private int $countryId;

    /**
     * @var int
     */
    private int $mainSiteId;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $typeEn;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $nameEn;

    /**
     * @var string
     */
    private string $municipality;

    /**
     * @var string
     */
    private string $municipalityEn;

    /**
     * @var string
     */
    private string $region;

    /**
     * @var string
     */
    private string $regionEn;

    /**
     * @var string
     */
    private string $postCode;

    /**
     * @var int
     */
    private int $addressNomenclature;

    /**
     * @var float
     */
    private float $x;

    /**
     * @var float
     */
    private float $y;

    /**
     * @var string
     */
    private string $servingDays;

    /**
     * @var int
     */
    private int $servingOfficeId;

    /**
     * @var int
     */
    private int $servingHubOfficeId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId(int $countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getMainSiteId(): int
    {
        return $this->mainSiteId;
    }

    /**
     * @param int $mainSiteId
     */
    public function setMainSiteId(int $mainSiteId): void
    {
        $this->mainSiteId = $mainSiteId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTypeEn(): string
    {
        return $this->typeEn;
    }

    /**
     * @param string $typeEn
     */
    public function setTypeEn(string $typeEn): void
    {
        $this->typeEn = $typeEn;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     */
    public function setNameEn(string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return string
     */
    public function getMunicipality(): string
    {
        return $this->municipality;
    }

    /**
     * @param string $municipality
     */
    public function setMunicipality(string $municipality): void
    {
        $this->municipality = $municipality;
    }

    /**
     * @return string
     */
    public function getMunicipalityEn(): string
    {
        return $this->municipalityEn;
    }

    /**
     * @param string $municipalityEn
     */
    public function setMunicipalityEn(string $municipalityEn): void
    {
        $this->municipalityEn = $municipalityEn;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getRegionEn(): string
    {
        return $this->regionEn;
    }

    /**
     * @param string $regionEn
     */
    public function setRegionEn(string $regionEn): void
    {
        $this->regionEn = $regionEn;
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
    public function getAddressNomenclature(): int
    {
        return $this->addressNomenclature;
    }

    /**
     * @param int $addressNomenclature
     */
    public function setAddressNomenclature(int $addressNomenclature): void
    {
        $this->addressNomenclature = $addressNomenclature;
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
     * @return string
     */
    public function getServingDays(): string
    {
        return $this->servingDays;
    }

    /**
     * @param string $servingDays
     */
    public function setServingDays(string $servingDays): void
    {
        $this->servingDays = $servingDays;
    }

    /**
     * @return int
     */
    public function getServingOfficeId(): int
    {
        return $this->servingOfficeId;
    }

    /**
     * @param int $servingOfficeId
     */
    public function setServingOfficeId(int $servingOfficeId): void
    {
        $this->servingOfficeId = $servingOfficeId;
    }

    /**
     * @return int
     */
    public function getServingHubOfficeId(): int
    {
        return $this->servingHubOfficeId;
    }

    /**
     * @param int $servingHubOfficeId
     */
    public function setServingHubOfficeId(int $servingHubOfficeId): void
    {
        $this->servingHubOfficeId = $servingHubOfficeId;
    }

}