<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Recipient.
 *
 * * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class Recipient
{
    /**
     * @Serializer\Type("int")
     */
    private int $pickupOfficeId;

    public function getPickupOfficeId(): int
    {
        return $this->pickupOfficeId;
    }

    public function setPickupOfficeId(int $pickupOfficeId): void
    {
        $this->pickupOfficeId = $pickupOfficeId;
    }

    public function toArray(): array
    {
        return [];
    }
}
