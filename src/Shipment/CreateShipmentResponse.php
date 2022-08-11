<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Shipment;

use DateTime;

/**
 * Class CreateShipmentResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentResponse
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var array
     */
    private array $parcels;

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
     * @var
     */
    private $error;


    public function setId($id): self
    {
        $this->id = $id;

        return $this;
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
    public function setParcels(array $parcels): void
    {
        $this->parcels = $parcels;
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
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error): void
    {
        $this->error = $error;
    }
}
