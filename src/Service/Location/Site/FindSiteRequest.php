<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Site;

use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindSiteRequest.
 *
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @author    Valentin Valkanov <email@email.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version   1.0
 *
 * @see       https://services.speedy.bg/api/api_examples.html#FindSiteRequest
 */
class FindSiteRequest
{
    use ToArray;

    private int $countryId;

    private ?string $name = null;

    private ?string $postCode = null;

    private ?string $type = null;

    private ?string $municipality = null;

    public function __construct(int $countryId, ?string $name = null, ?string $postCode = null)
    {
        $this->countryId = $countryId;
        $this->name      = $name;
        $this->postCode  = $postCode;
    }

    public function getCountryId(): int
    {
        return $this->countryId;
    }

    public function setCountryId(int $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }

    public function setMunicipality(?string $municipality): void
    {
        $this->municipality = $municipality;
    }

    /**
     * @return array<string,string|int|null>
     */
    public function toArray(): array
    {
        return [
            Property::COUNTRY_ID->value => $this->countryId,
            Property::NAME->value       => $this->name,
            Property::POST_CODE->value  => $this->postCode
        ];
    }
}
