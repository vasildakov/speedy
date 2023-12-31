<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

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
    private string $name;

    private ?string $isoAlpha2;

    private ?string $isoAlpha3;

    public function __construct(string $name)
    {
        $this->name = $name;
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
     * @return string[]
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
