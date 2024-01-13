<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Track;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class TrackResponse.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class TrackResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Service\Track\TrackedParcel>")
     */
    private ArrayCollection $parcels;

    public function __construct()
    {
        $this->parcels = new ArrayCollection();
    }

    public function getParcels(): ArrayCollection
    {
        return $this->parcels;
    }

    public function setParcels(ArrayCollection $parcels): void
    {
        $this->parcels = $parcels;
    }
}
