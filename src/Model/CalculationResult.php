<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use DateTime;
use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Shipment\ShipmentAdditionalServices;
use VasilDakov\Speedy\Shipment\ShipmentPrice;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CalculationResult
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class CalculationResult
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private int $serviceId;

    /**
     * @var ShipmentAdditionalServices
     * @Serializer\Type("VasilDakov\Speedy\Shipment\ShipmentAdditionalServices")
     */
    private ShipmentAdditionalServices $additionalServices;

    /**
     * @var ShipmentPrice
     * @Serializer\Type("VasilDakov\Speedy\Shipment\ShipmentPrice")
     */
    private ShipmentPrice $price;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private DateTime $pickupDate;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    private DateTime $deliveryDeadline;

    /**
     * @var ?Error
     * @Serializer\Type("VasilDakov\Speedy\Error")
     */
    private ?Error $error;

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
     * @param ShipmentAdditionalServices $additionalServices
     */
    public function setAdditionalServices(ShipmentAdditionalServices $additionalServices): void
    {
        $this->additionalServices = $additionalServices;
    }

    /**
     * @return ShipmentAdditionalServices
     */
    public function getAdditionalServices(): ShipmentAdditionalServices
    {
        return $this->additionalServices;
    }

    /**
     * @param ShipmentPrice $price
     */
    public function setPrice(ShipmentPrice $price): void
    {
        $this->price = $price;
    }

    /**
     * @return ShipmentPrice
     */
    public function getPrice(): ShipmentPrice
    {
        return $this->price;
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
    public function getPickupDate(): DateTime
    {
        return $this->pickupDate;
    }

    /**
     * @param DateTime $deliveryDeadline
     */
    public function setDeliveryDeadline(DateTime $deliveryDeadline): void
    {
        $this->deliveryDeadline = $deliveryDeadline;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDeadline(): DateTime
    {
        return $this->deliveryDeadline;
    }

    /**
     * @param Error|null $error
     */
    public function setError(?Error $error): void
    {
        $this->error = $error;
    }

    /**
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->error;
    }
}
