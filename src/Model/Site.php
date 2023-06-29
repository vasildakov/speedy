<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\ToArray;

/**
 * Class Site
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 * @Serializer\AccessType("public_method")
 */
class Site
{
    use ToArray;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $id;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $countryId;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $mainSiteId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $type;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $typeEn;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $name;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $nameEn;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $municipality;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $municipalityEn;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $region;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $regionEn;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $postCode;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $addressNomenclature;

    /**
     * @var float|null
     * @Serializer\Type("float")
     */
    private ?float $x;

    /**
     * @var float|null
     * @Serializer\Type("float")
     */
    private ?float $y;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $servingDays;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $servingOfficeId;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $servingHubOfficeId;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
     * @return int|null
     */
    public function getMainSiteId(): ?int
    {
        return $this->mainSiteId;
    }

    /**
     * @param int|null $mainSiteId
     */
    public function setMainSiteId(?int $mainSiteId): void
    {
        $this->mainSiteId = $mainSiteId;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getTypeEn(): ?string
    {
        return $this->typeEn;
    }

    /**
     * @param string|null $typeEn
     */
    public function setTypeEn(?string $typeEn): void
    {
        $this->typeEn = $typeEn;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getNameEn(): ?string
    {
        return $this->nameEn;
    }

    /**
     * @param string|null $nameEn
     */
    public function setNameEn(?string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return string|null
     */
    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }

    /**
     * @param string|null $municipality
     */
    public function setMunicipality(?string $municipality): void
    {
        $this->municipality = $municipality;
    }

    /**
     * @return string|null
     */
    public function getMunicipalityEn(): ?string
    {
        return $this->municipalityEn;
    }

    /**
     * @param string|null $municipalityEn
     */
    public function setMunicipalityEn(?string $municipalityEn): void
    {
        $this->municipalityEn = $municipalityEn;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return string|null
     */
    public function getRegionEn(): ?string
    {
        return $this->regionEn;
    }

    /**
     * @param string|null $regionEn
     */
    public function setRegionEn(?string $regionEn): void
    {
        $this->regionEn = $regionEn;
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
    public function getAddressNomenclature(): ?int
    {
        return $this->addressNomenclature;
    }

    /**
     * @param int|null $addressNomenclature
     */
    public function setAddressNomenclature(?int $addressNomenclature): void
    {
        $this->addressNomenclature = $addressNomenclature;
    }

    /**
     * @return float|int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float|int $x
     */
    public function setX($x): void
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
    public function getServingDays(): ?string
    {
        return $this->servingDays;
    }

    /**
     * @param string|null $servingDays
     */
    public function setServingDays(?string $servingDays): void
    {
        $this->servingDays = $servingDays;
    }

    /**
     * @return int|null
     */
    public function getServingOfficeId(): ?int
    {
        return $this->servingOfficeId;
    }

    /**
     * @param int|null $servingOfficeId
     */
    public function setServingOfficeId(?int $servingOfficeId): void
    {
        $this->servingOfficeId = $servingOfficeId;
    }

    /**
     * @return int|null
     */
    public function getServingHubOfficeId(): ?int
    {
        return $this->servingHubOfficeId;
    }

    /**
     * @param int|null $servingHubOfficeId
     */
    public function setServingHubOfficeId(?int $servingHubOfficeId): void
    {
        $this->servingHubOfficeId = $servingHubOfficeId;
    }
}
