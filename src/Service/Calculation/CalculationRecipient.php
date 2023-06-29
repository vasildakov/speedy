<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\Traits\ToArray;

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

    /**
     * @var bool
     */
    private bool $privatePerson;

    /**
     * @var CalculationAddressLocation|null
     */
    private ?CalculationAddressLocation $addressLocation = null;

    /**
     * @var int|null
     */
    private ?int $siteId = null;

    /**
     * @var int|null
     */
    private ?int $pickupOfficeId = null;

    /**
     * @param bool $privatePerson
     * @param int|null $pickupOfficeId
     * @param CalculationAddressLocation|null $addressLocation
     */
    public function __construct(
        bool $privatePerson,
        ?int $pickupOfficeId = null,
        ?CalculationAddressLocation $addressLocation = null
    ) {
        $this->privatePerson   = $privatePerson;
        $this->pickupOfficeId  = $pickupOfficeId;
        $this->addressLocation = $addressLocation;
    }

    /**
     * @return bool
     */
    public function isPrivatePerson(): bool
    {
        return $this->privatePerson;
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

    /**
     * @return CalculationAddressLocation|null
     */
    public function getAddressLocation(): ?CalculationAddressLocation
    {
        return $this->addressLocation;
    }
}
