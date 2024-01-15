<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\State;

use VasilDakov\Speedy\Property;

/**
 * Class FindStateRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindStateRequest
{
    private ?int $countryId;

    private ?string $name;

    public function __construct(int $countryId, ?string $name = null)
    {
        $this->countryId = $countryId;
        $this->name = $name;
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
    public function getCountryId(): ?int
    {
        return $this->countryId;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return array<string,int|string|null>
     */
    public function toArray(): array
    {
        return [
            Property::COUNTRY_ID->value => $this->countryId,
            Property::NAME->value => $this->name,
        ];
    }
}
