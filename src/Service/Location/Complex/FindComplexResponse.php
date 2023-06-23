<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Complex;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class FindComplexResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class FindComplexResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Complex>")
     */
    private ArrayCollection $complexes;

    public function __construct()
    {
        $this->complexes = new ArrayCollection();
    }

    /**
     * @param ArrayCollection $complexes
     */
    public function setComplexes(ArrayCollection $complexes): void
    {
        $this->complexes = $complexes;
    }

    /**
     * @return ArrayCollection
     */
    public function getComplexes(): ArrayCollection
    {
        return $this->complexes;
    }
}
