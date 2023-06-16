<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class Sender
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Sender extends Client
{
    /**
     * @var int
     */
    private int $dropoffOfficeId;

    /**
     * @return int
     */
    public function getDropoffOfficeId(): int
    {
        return $this->dropoffOfficeId;
    }

    /**
     * @param int $dropoffOfficeId
     */
    public function setDropoffOfficeId(int $dropoffOfficeId): void
    {
        $this->dropoffOfficeId = $dropoffOfficeId;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [

        ];
    }
}