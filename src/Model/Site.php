<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Site.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 *
 * @Serializer\AccessType("public_method")
 */
class Site
{
    use ToArray;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $id;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $countryId;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $mainSiteId;

    /**
     * @Serializer\Type("string")
     */
    private ?string $type;

    /**
     * @Serializer\Type("string")
     */
    private ?string $typeEn;

    /**
     * @Serializer\Type("string")
     */
    private ?string $name;

    /**
     * @Serializer\Type("string")
     */
    private ?string $nameEn;

    /**
     * @Serializer\Type("string")
     */
    private ?string $municipality;

    /**
     * @Serializer\Type("string")
     */
    private ?string $municipalityEn;

    /**
     * @Serializer\Type("string")
     */
    private ?string $region;

    /**
     * @Serializer\Type("string")
     */
    private ?string $regionEn;

    /**
     * @Serializer\Type("string")
     */
    private ?string $postCode;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $addressNomenclature;

    /**
     * @Serializer\Type("float")
     */
    private ?float $x;

    /**
     * @Serializer\Type("float")
     */
    private ?float $y;

    /**
     * @Serializer\Type("string")
     */
    private ?string $servingDays;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $servingOfficeId;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $servingHubOfficeId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function setCountryId(?int $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getMainSiteId(): ?int
    {
        return $this->mainSiteId;
    }

    public function setMainSiteId(?int $mainSiteId): void
    {
        $this->mainSiteId = $mainSiteId;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getTypeEn(): ?string
    {
        return $this->typeEn;
    }

    public function setTypeEn(?string $typeEn): void
    {
        $this->typeEn = $typeEn;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getNameEn(): ?string
    {
        return $this->nameEn;
    }

    public function setNameEn(?string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }

    public function setMunicipality(?string $municipality): void
    {
        $this->municipality = $municipality;
    }

    public function getMunicipalityEn(): ?string
    {
        return $this->municipalityEn;
    }

    public function setMunicipalityEn(?string $municipalityEn): void
    {
        $this->municipalityEn = $municipalityEn;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    public function getRegionEn(): ?string
    {
        return $this->regionEn;
    }

    public function setRegionEn(?string $regionEn): void
    {
        $this->regionEn = $regionEn;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    public function getAddressNomenclature(): ?int
    {
        return $this->addressNomenclature;
    }

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

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(?float $y): void
    {
        $this->y = $y;
    }

    public function getServingDays(): ?string
    {
        return $this->servingDays;
    }

    public function setServingDays(?string $servingDays): void
    {
        $this->servingDays = $servingDays;
    }

    public function getServingOfficeId(): ?int
    {
        return $this->servingOfficeId;
    }

    public function setServingOfficeId(?int $servingOfficeId): void
    {
        $this->servingOfficeId = $servingOfficeId;
    }

    public function getServingHubOfficeId(): ?int
    {
        return $this->servingHubOfficeId;
    }

    public function setServingHubOfficeId(?int $servingHubOfficeId): void
    {
        $this->servingHubOfficeId = $servingHubOfficeId;
    }
}
