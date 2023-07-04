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

/**
 * Class CancelShipmentRequest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class CancelShipmentRequest
{
    private string $shipmentId;

    private string $comment;

    public function __construct(string $shipmentId, string $comment)
    {
        $this->shipmentId = $shipmentId;
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
}