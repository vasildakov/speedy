<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class ShipmentPhoneNumber
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @todo https://api.speedy.bg/web-api.html?fbclid=IwAR1pcF0uXsAZheAKesQcArBJ7QenkDVyEz36aXwfRGCQZvcInjIYMuE82E4#href-ds-shipment-phone-number
 */
class ShipmentPhoneNumber {
    
    /**
     * @var string
     */
    private string $number;
    
    /**
     * @var string
     */
    private ?string $extension = null;
    
    /**
     * @param string $number
     */
    public function __construct(string $number) 
    {
        $this->setNumber($number);
    }
    
    /**
     * @param string $number
     * @return self
     */
    private function setNumber(string $number): self
    {
        // validation goes here
        $this->number = $number;
        
        return $this;
    }
    
    /**
     * @return string number
     */
    public function getNumber(): string 
    {
        return $this->number;
    }
    
    /**
     * @param string $extension
     * @return self
     */
    public function setExtension(string $extension): self
    {
        $this->extension = $extension;
        
        return $this;
    }
    
    /**
     * @return string extension
     */
    public function getExtension(): ?string 
    {
        return $this->extension;
    }

}
