<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class ShipmentPhoneNumber
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPhoneNumber {

    private string $number;
    private ?string $extension = null;

    public function __construct(string $number) 
    {
        $this->setNumber($number);
    }
    
    private function setNumber(string $number): self
    {
        // validation goes here
        $this->number = $number;
        return $this;
    }

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
