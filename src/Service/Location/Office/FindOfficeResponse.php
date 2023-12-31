<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Office;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class FindOfficeResponse.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @Serializer\AccessType("public_method")
 */
class FindOfficeResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Office>")
     */
    public ArrayCollection $offices;

    public function __construct()
    {
        $this->offices = new ArrayCollection();
    }

    public function getOffices(): ArrayCollection
    {
        return $this->offices;
    }

    public function setOffices(ArrayCollection $offices): void
    {
        $this->offices = $offices;
    }
}
