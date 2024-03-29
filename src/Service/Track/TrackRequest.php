<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Track;

use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Speedy;

/**
 * Class TrackRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class TrackRequest
{
    private array $parcels;

    public function __construct(array $parcels)
    {
        $this->parcels = $parcels;
    }

    public function getParcels(): array
    {
        return $this->parcels;
    }

    public function toArray(): array
    {
        return [
            Property::PARCELS->value => $this->parcels,
        ];
    }
}
