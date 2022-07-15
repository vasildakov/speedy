<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\ValueObject\CountryCode;

/**
 * Class CalculationAddressLocation
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @todo https://api.speedy.bg/web-api.html#href-ds-calculation-address-location
 */
class CalculationAddressLocation
{
    /**
     * @todo Create all class attributes
     * @todo Initialize all required attributes in the constructor
     * @todo Create setters and getters for all attributes
     * @todo Create unit tests
     */

    
    /**
     * Country ISO code. If not provided, local country is assumed. Used for all address types.
     *
     * @var CountryCode
     */
    private ?CountryCode $countryId;
    private string $stateId;
    private int $siteId;
    private ?string $siteType;
    private ?string $siteName;
    private string $postCode;
    
    public function __construct(string $stateId, int $siteId, string $postCode) 
    {
        $this->stateId = $stateId;
        $this->siteId = $siteId;
        $this->postCode = $postCode;
    }

    
    public function setCountryId(CountryCode $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
        
    }
    public function getStateId(): string 
    {
        return $this->stateId;
    }

    public function getSiteId(): int 
    {
        return $this->siteId;
    }

    public function getSiteType(): string 
    {
        return $this->siteType;
    }

    public function getSiteName(): string 
    {
        return $this->siteName;
    }

    public function getPostCode(): string 
    {
        return $this->postCode;
    }

    public function setStateId(string $stateId): self 
    {
        $this->stateId = $stateId;
        return $this;
    }

    public function setSiteId(int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function setSiteType(string $siteType): self
    {
        $this->siteType = $siteType;
        return $this;
    }

    public function setSiteName(string $siteName): self
    {
        $this->siteName = $siteName;
        return $this;
    }

    public function setPostCode(string $postCode): self 
    {
        $this->postCode = $postCode;
        return $this;
    }  
}
