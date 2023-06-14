<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use DateTime;
use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Shipment\ShipmentAdditionalServices;
use VasilDakov\Speedy\Shipment\ShipmentPrice;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CalculationResult
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationResult
{
    /**
     * @var int
     */
    private int $serviceId;

    /**
     * @var ShipmentAdditionalServices
     */
    private ShipmentAdditionalServices $additionalServices;

    /**
     * @var ShipmentPrice
     */
    private ShipmentPrice $price;

    /**
     * @var DateTime
     */
    private DateTime $pickupDate;

    /**
     * @var DateTime
     */
    private DateTime $deliveryDeadline;

    /**
     * @var Error|null
     */
    private ?Error $error = null;

    /**
     * @return int
     */
    public function getServiceId(): int
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
     * @return ShipmentAdditionalServices
     */
    public function getAdditionalServices(): ShipmentAdditionalServices
    {
        return $this->additionalServices;
    }

    /**
     * @param ShipmentAdditionalServices $additionalServices
     */
    public function setAdditionalServices(ShipmentAdditionalServices $additionalServices): void
    {
        $this->additionalServices = $additionalServices;
    }

    /**
     * @return ShipmentPrice
     */
    public function getPrice(): ShipmentPrice
    {
        return $this->price;
    }

    /**
     * @param ShipmentPrice $price
     */
    public function setPrice(ShipmentPrice $price): void
    {
        $this->price = $price;
    }

    /**
     * @return DateTime
     */
    public function getPickupDate(): DateTime
    {
        return $this->pickupDate;
    }

    /**
     * @param DateTime $pickupDate
     */
    public function setPickupDate(DateTime $pickupDate): void
    {
        $this->pickupDate = $pickupDate;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDeadline(): DateTime
    {
        return $this->deliveryDeadline;
    }

    /**
     * @param DateTime $deliveryDeadline
     */
    public function setDeliveryDeadline(DateTime $deliveryDeadline): void
    {
        $this->deliveryDeadline = $deliveryDeadline;
    }

    /**
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @param Error|null $error
     */
    public function setError(?Error $error): void
    {
        $this->error = $error;
    }

}