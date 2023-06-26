<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\ToArray;

/**
 * Class CalculationRecipient
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationRecipient
{
    use ToArray;

    private bool $privatePerson;

    private ?CalculationAddressLocation $addressLocation = null;

    private ?int $siteId = null;

    private ?int $pickupOfficeId = null;

    public function __construct(
        bool $privatePerson,
        ?int $pickupOfficeId = null,
        ?CalculationAddressLocation $addressLocation = null
    ) {
        $this->privatePerson = $privatePerson;
        $this->pickupOfficeId = $pickupOfficeId;
        $this->addressLocation = $addressLocation;
    }

    /**
     * @param int|null $siteId
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * @return int|null
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * @param int|null $pickupOfficeId
     */
    public function setPickupOfficeId(?int $pickupOfficeId): void
    {
        $this->pickupOfficeId = $pickupOfficeId;
    }

    /**
     * @return int|null
     */
    public function getPickupOfficeId(): ?int
    {
        return $this->pickupOfficeId;
    }
}
