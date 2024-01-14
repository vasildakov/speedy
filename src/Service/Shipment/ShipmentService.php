<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentService.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 */
class ShipmentService
{
    use ToArray;

    private ?\DateTime $pickupDate = null;

    private bool $autoAdjustPickupDate = true;

    private int $serviceId;

    private ?ShipmentAdditionalServices $additionalServices = null;

    private ?int $deferredDays = null;

    private bool $saturdayDelivery = false;

    public function __construct(int $serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function getPickupDate(): ?\DateTime
    {
        return $this->pickupDate;
    }

    public function setPickupDate(\DateTime $pickupDate): self
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    public function isAutoAdjustPickupDate(): bool
    {
        return $this->autoAdjustPickupDate;
    }

    public function setAutoAdjustPickupDate(bool $autoAdjustPickupDate): self
    {
        $this->autoAdjustPickupDate = $autoAdjustPickupDate;

        return $this;
    }

    public function getServiceId(): ?int
    {
        return $this->serviceId;
    }

    public function setServiceId(int $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    public function getAdditionalServices(): ?ShipmentAdditionalServices
    {
        return $this->additionalServices;
    }

    public function setAdditionalServices(ShipmentAdditionalServices $additionalServices): self
    {
        $this->additionalServices = $additionalServices;

        return $this;
    }

    public function getDeferredDays(): ?int
    {
        return $this->deferredDays;
    }

    public function setDeferredDays(int $deferredDays): self
    {
        $this->deferredDays = $deferredDays;

        return $this;
    }

    public function isSaturdayDelivery(): bool
    {
        return $this->saturdayDelivery;
    }

    public function setSaturdayDelivery(bool $saturdayDelivery): self
    {
        $this->saturdayDelivery = $saturdayDelivery;

        return $this;
    }
}
