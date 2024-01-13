<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Sender.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 */
class Sender extends Client
{
    use ToArray;

    private ?int $dropoffOfficeId = null;

    /**
     * @return ?int
     */
    public function getDropoffOfficeId(): ?int
    {
        return $this->dropoffOfficeId;
    }

    /**
     * @param ?int $dropoffOfficeId
     */
    public function setDropoffOfficeId(?int $dropoffOfficeId): void
    {
        $this->dropoffOfficeId = $dropoffOfficeId;
    }
}
