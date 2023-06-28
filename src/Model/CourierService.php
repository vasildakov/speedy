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

namespace VasilDakov\Speedy\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CourierService
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class CourierService
{
    /**
     * Courier service id
     * @var int
     * @Serializer\Type("integer")
     */
    private int $id;

    /**
     * Courier service name in local language
     * @var string
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * Courier service name in English
     * @var string
     * @Serializer\Type("string")
     */
    private string $nameEn;

    /**
     * Additional services options
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     */
    private ArrayCollection $additionalServices;

    /**
     * Cargo type
     * @var string
     * @Serializer\Type("string")
     */
    private string $cargoType;

    /**
     * Require weight for each parcel on create shipment
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $requireParcelWeight;

    /**
     * Require size for each parcel on create shipment
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $requireParcelSize;

}
