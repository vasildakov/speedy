<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use DateTime;
use VasilDakov\Speedy\Speedy;

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
        $this->setServiceId($serviceId);
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


    /**
     * @return array
     */
    public function toArray(): array
    {
        $data = [
            Speedy::SERVICE_ID => $this->getServiceId(),
            Speedy::AUTO_ADJUST_PICKUP_DATE => $this->isAutoAdjustPickupDate(),
            Speedy::SATURDAY_DELIVERY => $this->isSaturdayDelivery()
        ];

        if (null !== $this->pickupDate) {
            $data[Speedy::PICKUP_DATE]  = $this->getPickupDate();
        }

        if (null !== $this->additionalServices) {
            $data[Speedy::ADDITIONAL_SERVICES]  = $this->getAdditionalServices();
        }

        if (null !== $this->deferredDays) {
            $data[Speedy::DEFERRED_DAYS]  = $this->getDeferredDays();
        }

        return $data;
    }
}
