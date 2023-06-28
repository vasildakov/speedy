<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\ToArray;

/**
 * Class CalculationSender
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationSender
{
    use ToArray;

    private int $clientId;

    private ?int $dropoffOfficeId;

    /**
     * @param int $clientId
     * @param int|null $dropoffOfficeId
     */
    public function __construct(int $clientId, int $dropoffOfficeId = null)
    {
        $this->clientId = $clientId;
        $this->dropoffOfficeId = $dropoffOfficeId;
    }

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @return int|null
     */
    public function getDropoffOfficeId(): ?int
    {
        return $this->dropoffOfficeId;
    }
}
