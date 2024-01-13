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

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Error;

/**
 * Class CancelShipmentResponse.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 *
 * @Serializer\AccessType("public_method")
 */
class CancelShipmentResponse
{
    /**
     * @Serializer\Type("VasilDakov\Speedy\Error")
     */
    private ?Error $error = null;

    public function __construct(Error $error = null)
    {
        $this->error = $error;
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
