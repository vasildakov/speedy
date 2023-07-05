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

use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class CancelShipmentResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class CancelShipmentResponseFactory
{
    public function __invoke(string $json): CancelShipmentResponse
    {
        $serializer = (new SerializerFactory())();

        /** @var CancelShipmentResponse */
        return $serializer->deserialize($json, CancelShipmentResponse::class, 'json');
    }
}
