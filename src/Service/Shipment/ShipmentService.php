<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use DateTime;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentService
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentService
{
    use ToArray;

    /**
     * @var DateTime|null
     */
    private ?DateTime $pickupDate = null;

    /**
     * @var bool
     */
    private bool $autoAdjustPickupDate = false;

    /**
     * @var int
     */
    private int $serviceId;

    /**
     * @var ShipmentAdditionalServices|null
     */
    private ?ShipmentAdditionalServices $additionalServices = null;

    /**
     * @var int|null
     */
    private ?int $deferredDays = null;

    /**
     * @var bool
     */
    private bool $saturdayDelivery = false;

    /**
     * @param int $serviceId
     */
    public function __construct(int $serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return DateTime|null
     */
    public function getPickupDate(): ?DateTime
    {
        return $this->pickupDate;
    }

    /**
     * @param DateTime $pickupDate
     * @return ShipmentService
     */
    public function setPickupDate(DateTime $pickupDate): self
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoAdjustPickupDate(): bool
    {
        return $this->autoAdjustPickupDate;
    }

    /**
     * @param bool $autoAdjustPickupDate
     * @return ShipmentService
     */
    public function setAutoAdjustPickupDate(bool $autoAdjustPickupDate): self
    {
        $this->autoAdjustPickupDate = $autoAdjustPickupDate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getServiceId(): ?int
    {
        return $this->serviceId;
    }

    /**
     * @param int $serviceId
     */
    public function setServiceId(int $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return ShipmentAdditionalServices|null
     */
    public function getAdditionalServices(): ?ShipmentAdditionalServices
    {
        return $this->additionalServices;
    }

    /**
     * @param ShipmentAdditionalServices $additionalServices
     * @return ShipmentService
     */
    public function setAdditionalServices(ShipmentAdditionalServices $additionalServices): self
    {
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeferredDays(): ?int
    {
        return $this->deferredDays;
    }

    /**
     * @param int $deferredDays
     * @return ShipmentService
     */
    public function setDeferredDays(int $deferredDays): self
    {
        $this->deferredDays = $deferredDays;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSaturdayDelivery(): bool
    {
        return $this->saturdayDelivery;
    }

    /**
     * @param bool $saturdayDelivery
     * @return ShipmentService
     */
    public function setSaturdayDelivery(bool $saturdayDelivery): self
    {
        $this->saturdayDelivery = $saturdayDelivery;

        return $this;
    }
}