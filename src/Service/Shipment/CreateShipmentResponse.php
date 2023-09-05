<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Error;

/**
 * Class CreateShipmentResponse
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentResponse
{
    /**
     * @var ?string
     * @Serializer\Type("string")
     * @Serializer\Accessor(getter="getId", setter="setId")
     */
    private ?string $id = '';

    /**
     * @var array|null
     * @Serializer\Type("array")
     */
    private ?array $parcels = null;

    /**
     * @var ShipmentPrice|null
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentPrice")
     * @Serializer\Accessor(getter="getPrice", setter="setPrice")
     */
    private ?ShipmentPrice $price = null;

    /**
     * @var DateTime|null
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private ?DateTime $pickupDate = null;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime")
     */
    private DateTime $deliveryDeadline;

    /**
     * @var Error|null
     * @Serializer\Type("VasilDakov\Speedy\Error")
     */
    private ?Error $error = null;

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getParcels(): array
    {
        return $this->parcels;
    }

    /**
     * @param array $parcels
     */
    public function setParcels(array $parcels = []): void
    {
        $this->parcels = $parcels;
    }

    /**
     * @return ShipmentPrice|null
     */
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
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error = null): void
    {
        $this->error = $error;
    }
}
