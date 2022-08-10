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
    private string $id;

    private array $parcels;

    private ShipmentPrice $price;

    private DateTime $pickupDate;

    private DateTime $deliveryDeadline;

    private $error;

}