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

namespace VasilDakov\Speedy\Service\Service;

use VasilDakov\Speedy\Service\Calculation\CalculationRecipient;
use VasilDakov\Speedy\Service\Calculation\CalculationSender;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Service\Shipment\ShipmentRecipient;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class DestinationServicesRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class DestinationServicesRequest extends CreateShipmentRequest
{
    use ToArray;

    private ?\DateTime $date = null;

    private ?CalculationSender $sender = null;

    private CalculationRecipient $recipient;

    public function __construct(CalculationRecipient $recipient)
    {
        $this->recipient = $recipient;
    }

    public function getRecipient(): ShipmentRecipient
    {
        return $this->recipient;
    }
}
