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
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Service\Shipment\ShipmentAdditionalServices;
use VasilDakov\Speedy\Service\Shipment\ShipmentPrice;

/**
 * Class CalculationResult.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 *
 * @Serializer\AccessType("public_method")
 */
class CalculationResult
{
    /**
     * @Serializer\Type("integer")
     */
    private int $serviceId;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentAdditionalServices")
     */
    private ?ShipmentAdditionalServices $additionalServices = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentPrice")
     */
    private ShipmentPrice $price;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private \DateTime $pickupDate;

    /**
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    private \DateTime $deliveryDeadline;

    /**
     * @var ?Error
     *
     * @Serializer\Type("VasilDakov\Speedy\Error")
     */
    private ?Error $error = null;

    public function getServiceId(): int
    {
        return $this->serviceId;
    }

    public function setServiceId(int $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @param ?ShipmentAdditionalServices $additionalServices
     */
    public function setAdditionalServices(?ShipmentAdditionalServices $additionalServices): void
    {
        $this->additionalServices = $additionalServices;
    }

    /**
     * @return ?ShipmentAdditionalServices
     */
    public function getAdditionalServices(): ?ShipmentAdditionalServices
    {
        return $this->additionalServices;
    }

    public function setPrice(ShipmentPrice $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): ShipmentPrice
    {
        return $this->price;
    }

    public function setPickupDate(\DateTime $pickupDate): void
    {
        $this->pickupDate = $pickupDate;
    }

    public function getPickupDate(): \DateTime
    {
        return $this->pickupDate;
    }

    public function setDeliveryDeadline(\DateTime $deliveryDeadline): void
    {
        $this->deliveryDeadline = $deliveryDeadline;
    }

    public function getDeliveryDeadline(): \DateTime
    {
        return $this->deliveryDeadline;
    }

    public function setError(?Error $error): void
    {
        $this->error = $error;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }
}
