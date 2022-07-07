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

    public function __construct(string $number) 
    {
        $this->number = $number;
    }
    
    public function getNumber(): string 
    {
        return $this->number;
    }

    public function setExtension(string $extension): void 
    {
        $this->extension = $extension;
    }
    
    public function getExtension(): string 
    {
        return $this->extension;
    }

}
