<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Site;

/**
 * Class FindSiteRequest
 *
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @author    Valentin Valkanov <email@email.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version   1.0
 * @see       https://services.speedy.bg/api/api_examples.html#FindSiteRequest
 */
class FindSiteRequest
{
    /**
     * @var string|null
     */
    private ?string $language = null;

    /**
     * @var int|null
     * TODO Validated against system register for external customers.
     */
    private ?int $clientSystemId = null;

    /**
     * @var int
     */
    private int $countryId;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var string|null
     */
    private ?string $postCode = null;

    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @var string|null
     */
    private ?string $municipality = null;


    public function __construct(int $countryId, string $name)
    {
        $this->countryId = $countryId;
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return int|null
     */
    public function getClientSystemId(): ?int
    {
        return $this->clientSystemId;
    }

    /**
     * @param int|null $clientSystemId
     */
    public function setClientSystemId(?int $clientSystemId): void
    {
        $this->clientSystemId = $clientSystemId;
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

    public function toArray(): array
    {
        return [
            'countryId' => $this->countryId,
            'name' => $this->name,
        ];
    }
}
