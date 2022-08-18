<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Recipient
 *
 * * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Recipient
{
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $pickupOfficeId;

    /**
     * @return int
     */
    public function getPickupOfficeId(): int
    {
        return $this->pickupOfficeId;
    }

    /**
     * @param int $pickupOfficeId
     */
    public function setPickupOfficeId(int $pickupOfficeId): void
    {
        $this->pickupOfficeId = $pickupOfficeId;
    }
}