<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Error;

/**
 * Class CreateShipmentResponse.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CreateShipmentResponse
{
    /**
     * @var ?string
     *
     * @Serializer\Type("string")
     *
     * @Serializer\Accessor(getter="getId", setter="setId")
     */
    private ?string $id = '';

    /**
     * @Serializer\Type("array")
     */
    private ?array $parcels = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentPrice")
     *
     * @Serializer\Accessor(getter="getPrice", setter="setPrice")
     */
    private ?ShipmentPrice $price = null;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private ?\DateTime $pickupDate = null;

    /**
     * @Serializer\Type("DateTime")
     */
    private \DateTime $deliveryDeadline;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Error")
     */
    private ?Error $error = null;

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getParcels(): array
    {
        return $this->parcels;
    }

    public function setParcels(array $parcels = []): void
    {
        $this->parcels = $parcels;
    }

    public function getPrice(): ?ShipmentPrice
    {
        return $this->price;
    }

    /**
     * @param ?ShipmentPrice $price
     */
    public function setPrice(?ShipmentPrice $price): void
    {
        $this->price = $price;
    }

    public function getPickupDate(): \DateTime
    {
        return $this->pickupDate;
    }

    public function setPickupDate(\DateTime $pickupDate): void
    {
        $this->pickupDate = $pickupDate;
    }

    public function getDeliveryDeadline(): \DateTime
    {
        return $this->deliveryDeadline;
    }

    public function setDeliveryDeadline(\DateTime $deliveryDeadline): void
    {
        $this->deliveryDeadline = $deliveryDeadline;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error = null): void
    {
        $this->error = $error;
    }
}
