<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\State;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class FindStateResponse.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @Serializer\AccessType("public_method")
 */
class FindStateResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\State>")
     */
    private ArrayCollection $states;

    public function __construct()
    {
        $this->states = new ArrayCollection();
    }

    public function setStates(ArrayCollection $states): void
    {
        $this->states = $states;
    }

    public function getStates(): ArrayCollection
    {
        return $this->states;
    }
}
