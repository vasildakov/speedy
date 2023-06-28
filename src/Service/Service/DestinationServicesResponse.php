<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Service;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class DestinationServicesResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class DestinationServicesResponse
{
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     */
    private ArrayCollection $services;

    public function __construct()
    {
        $this->services = new ArrayCollection();
    }

    /**
     * @param ArrayCollection $services
     */
    public function setServices(ArrayCollection $services): void
    {
        $this->services = $services;
    }

    /**
     * @return ArrayCollection
     */
    public function getServices(): ArrayCollection
    {
        return $this->services;
    }

}
