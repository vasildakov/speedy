<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Country.
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
class Country
{
    /**
     * @Serializer\Type("integer")
     */
    public int $id;

    /**
     * @Serializer\Type("string")
     */
    public string $name;

    /**
     * @Serializer\Type("string")
     */
    public string $isoAlpha2;

    /**
     * @Serializer\Type("string")
     */
    public string $isoAlpha3;

    /**
     * @Serializer\Type("array")
     */
    public array $postCodeFormats;

    /**
     * @Serializer\Type("string")
     */
    public string $currencyCode;

    /**
     * @Serializer\Type("bool")
     */
    public bool $requireState;

    /**
     * @Serializer\Type("integer")
     */
    public int $addressType;

    /**
     * @Serializer\Type("integer")
     */
    public int $siteNomen;

    /**
     * @Serializer\Type("integer")
     */
    public ?int $defaultOfficeId = null;

    /**
     * @Serializer\Type("array")
     */
    public array $streetTypes;

    /**
     * @Serializer\Type("array")
     */
    public array $complexTypes;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setIsoAlpha2(string $isoAlpha2): void
    {
        $this->isoAlpha2 = $isoAlpha2;
    }

    public function getIsoAlpha2(): string
    {
        return $this->isoAlpha2;
    }

    public function setIsoAlpha3(string $isoAlpha3): void
    {
        $this->isoAlpha3 = $isoAlpha3;
    }

    public function getIsoAlpha3(): string
    {
        return $this->isoAlpha3;
    }

    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setRequireState(bool $requireState): void
    {
        $this->requireState = $requireState;
    }

    public function getRequireState(): bool
    {
        return $this->requireState;
    }

    public function setAddressType(int $addressType): void
    {
        $this->addressType = $addressType;
    }

    public function getAddressType(): int
    {
        return $this->addressType;
    }

    public function setSiteNomen(int $siteNomen): void
    {
        $this->siteNomen = $siteNomen;
    }

    public function getSiteNomen(): int
    {
        return $this->siteNomen;
    }

    public function setStreetTypes(array $streetTypes): void
    {
        $this->streetTypes = $streetTypes;
    }

    public function getStreetTypes(): array
    {
        return $this->streetTypes;
    }

    public function setComplexTypes(array $complexTypes): void
    {
        $this->complexTypes = $complexTypes;
    }

    public function getComplexTypes(): array
    {
        return $this->complexTypes;
    }

    public function setPostCodeFormats(array $postCodeFormats): void
    {
        $this->postCodeFormats = $postCodeFormats;
    }

    public function getPostCodeFormats(): array
    {
        return $this->postCodeFormats;
    }

    public function setDefaultOfficeId(int $defaultOfficeId): void
    {
        $this->defaultOfficeId = $defaultOfficeId;
    }

    public function getDefaultOfficeId(): ?int
    {
        return $this->defaultOfficeId;
    }

    public function toArray(): array
    {
        return [];
    }
}
