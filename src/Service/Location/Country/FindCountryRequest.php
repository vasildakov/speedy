<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

use VasilDakov\Speedy\Property;

/**
 * Class FindCountry.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindCountryRequest
{
    private ?string $name = null;

    private ?string $isoAlpha2 = null;

    private ?string $isoAlpha3 = null;

    public function __construct(?string $name, ?string $isoAlpha2, ?string $isoAlpha3)
    {
        $this->name = $name;
        $this->isoAlpha2 = $isoAlpha2;
        $this->isoAlpha3 = $isoAlpha3;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setIsoAlpha2(string $isoAlpha2): void
    {
        $this->isoAlpha2 = $isoAlpha2;
    }

    public function getIsoAlpha2(): ?string
    {
        return $this->isoAlpha2;
    }

    public function setIsoAlpha3(string $isoAlpha3): void
    {
        $this->isoAlpha3 = $isoAlpha3;
    }

    public function getIsoAlpha3(): ?string
    {
        return $this->isoAlpha3;
    }

    /**
     * @return array<string,string|null>
     */
    public function toArray(): array
    {
        return [
            Property::NAME->value        => $this->name,
            Property::ISO_ALPHA_2->value => $this->isoAlpha2,
            Property::ISO_ALPHA_3->value => $this->isoAlpha3
        ];
    }
}
