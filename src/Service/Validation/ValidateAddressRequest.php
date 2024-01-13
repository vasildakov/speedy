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

namespace VasilDakov\Speedy\Service\Validation;

use VasilDakov\Speedy\Service\Shipment\ShipmentAddress;

/**
 * Class ValidateAddressRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class ValidateAddressRequest
{
    private ShipmentAddress $address;

    public function __construct(ShipmentAddress $address)
    {
        $this->address = $address;
    }
}
