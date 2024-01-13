<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentPhoneNumber.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @todo https://api.speedy.bg/web-api.html?fbclid=IwAR1pcF0uXsAZheAKesQcArBJ7QenkDVyEz36aXwfRGCQZvcInjIYMuE82E4#href-ds-shipment-phone-number
 */
class ShipmentPhoneNumber
{
    use ToArray;

    private string $number;

    private ?string $extension = null;

    public function __construct(string $number)
    {
        $this->setNumber($number);
    }

    private function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string number
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }
}
