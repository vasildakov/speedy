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
    private CountryCode $countryId;
    
    /**
     * @var string
     */
    private string $stateId;
    
    /**
     * @var int
     */
    private int $siteId;
    
    /**
     * @var string
     */
    private string $siteType;
    
    /**
     * @var string
     */
    private string $siteName;

    /**
     * @var string
     */
    private string $postCode;

    /**
     * @param string $stateId
     * @param int $siteId
     * @param string $postCode
     */
    public function __construct(string $stateId, int $siteId, string $postCode) 
    {
        $this->stateId = $stateId;
        $this->siteId = $siteId;
        $this->postCode = $postCode;
    }
    
    /**
     * @param CountryCode $countryId
     * @return self
     */
    public function setCountryId(CountryCode $countryId): self
    {
        $this->countryId = $countryId;

        return $this;    
    }
    
    /**
     * @return string stateId
     */
    public function getStateId(): string 
    {
        return $this->stateId;
    }
    
    /**
     * @param string $stateId
     * @return self
     */
    public function setStateId(string $stateId): self 
    {
        $this->stateId = $stateId;
        
        return $this;
    }
    
    /**
     * @return int stateId
     */

    public function getSiteId(): int 
    {
        return $this->siteId;
    }
    
    /**
     * @param int $siteId
     * @return self
     */
    public function setSiteId(int $siteId): self
    {
        $this->siteId = $siteId;
        
        return $this;
    }
    
    /**
     * @return string siteType
     */
    public function getSiteType(): string 
    {
        return $this->siteType;
    }
    
    /**
     * @param int $siteType
     * @return self
     */
    public function setSiteType(string $siteType): self
    {
        $this->siteType = $siteType;
        
        return $this;
    }
    
    /**
     * @return string siteName
     */
    public function getSiteName(): string 
    {
        return $this->siteName;
    }
    
    /**
     * @param string $siteName
     * @return self
     */
    public function setSiteName(string $siteName): self
    {
        $this->siteName = $siteName;
        
        return $this;
    }
    
    /**
     * @return string postCode
     */
    public function getPostCode(): string 
    {
        return $this->postCode;
    }
    
    /**
     * @param string $postCode
     * @return self
     */
    public function setPostCode(string $postCode): self 
    {
        $this->postCode = $postCode;
        
        return $this;
    }  
}
