<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class Country
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 */
class Country
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $isoAlpha2;

    /**
     * @var string
     */
    public string $isoAlpha3;

    /**
     * @var array
     */
    public array $postCodeFormats;

    /**
     * @var string
     */
    public string $currencyCode;

    /**
     * @var bool
     */
    public bool $requireState;

    /**
     * @var int
     */
    public int $addressType;

    /**
     * @var int
     */
    public int $siteNomen;

    /**
     * @var int|null
     */
    public ?int $defaultOfficeId = null;

    /**
     * @var array
     */
    public array $streetTypes;

    /**
     * @var array
     */
    public array $complexTypes;

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
    public function getId(): int
    {
        return $this->id;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $isoAlpha2
     */
    public function setIsoAlpha2(string $isoAlpha2): void
    {
        $this->isoAlpha2 = $isoAlpha2;
    }

    /**
     * @return string
     */
    public function getIsoAlpha2(): string
    {
        return $this->isoAlpha2;
    }

    /**
     * @param string $isoAlpha3
     */
    public function setIsoAlpha3(string $isoAlpha3): void
    {
        $this->isoAlpha3 = $isoAlpha3;
    }

    /**
     * @return string
     */
    public function getIsoAlpha3(): string
    {
        return $this->isoAlpha3;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param bool $requireState
     */
    public function setRequireState(bool $requireState): void
    {
        $this->requireState = $requireState;
    }

    /**
     * @return bool
     */
    public function getRequireState(): bool
    {
        return $this->requireState;
    }

    /**
     * @param int $addressType
     */
    public function setAddressType(int $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * @return int
     */
    public function getAddressType(): int
    {
        return $this->addressType;
    }

    /**
     * @param int $siteNomen
     */
    public function setSiteNomen(int $siteNomen): void
    {
        $this->siteNomen = $siteNomen;
    }

    /**
     * @return int
     */
    public function getSiteNomen(): int
    {
        return $this->siteNomen;
    }

    /**
     * @param array $streetTypes
     */
    public function setStreetTypes(array $streetTypes): void
    {
        $this->streetTypes = $streetTypes;
    }

    public function getStreetTypes(): array
    {
        return $this->streetTypes;
    }

    /**
     * @param array $complexTypes
     */
    public function setComplexTypes(array $complexTypes): void
    {
        $this->complexTypes = $complexTypes;
    }

    public function getComplexTypes(): array
    {
        return $this->complexTypes;
    }

    /**
     * @param array $postCodeFormats
     */
    public function setPostCodeFormats(array $postCodeFormats): void
    {
        $this->postCodeFormats = $postCodeFormats;
    }

    /**
     * @return array
     */
    public function getPostCodeFormats(): array
    {
        return $this->postCodeFormats;
    }

    /**
     * @param int $defaultOfficeId
     */
    public function setDefaultOfficeId(int $defaultOfficeId): void
    {
        $this->defaultOfficeId = $defaultOfficeId;
    }

    /**
     * @return int|null
     */
    public function getDefaultOfficeId(): ?int
    {
        return $this->defaultOfficeId;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}
