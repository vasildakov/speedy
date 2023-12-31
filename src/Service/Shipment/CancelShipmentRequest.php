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

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CancelShipmentRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class CancelShipmentRequest
{
    use ToArray;

    private string $shipmentId;

    private string $comment;

    public function __construct(string $shipmentId, string $comment)
    {
        $this->shipmentId = $shipmentId;
        $this->comment = $comment;
    }

    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }

    public function getComment(): string
    {
        return $this->comment;
    }
}
