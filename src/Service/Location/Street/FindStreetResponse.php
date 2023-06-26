<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Street;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class FindStreetResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class FindStreetResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Street>")
     */
    private ArrayCollection $streets;

    public function __construct()
    {
        $this->streets = new ArrayCollection();
    }

    /**
     * @param ArrayCollection $streets
     */
    public function setStreets(ArrayCollection $streets): void
    {
        $this->streets = $streets;
    }

    /**
     * @return ArrayCollection
     */
    public function getStreets(): ArrayCollection
    {
        return $this->streets;
    }
}
