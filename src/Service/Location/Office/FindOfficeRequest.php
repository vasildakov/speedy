<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Office;

use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindOfficeRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindOfficeRequest
{
    use ToArray;

    private ?int $countryId;

    private ?int $siteId;

    private ?string $name;

    public function __construct(?int $countryId = null, ?int $siteId = null, ?string $name = null)
    {
        $this->countryId = $countryId;
        $this->siteId    = $siteId;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }


    public function toArray(): array
    {
        return [
            Property::COUNTRY_ID->value => $this->countryId,
            Property::SITE_ID->value => $this->siteId,
            Property::NAME->value => $this->name,
        ];
    }
}
