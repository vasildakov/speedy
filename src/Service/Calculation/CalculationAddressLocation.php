<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Model\CountryCode;

/**
 * Class CalculationAddressLocation
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationAddressLocation
{
    /**
     * Country ISO code. If not provided, local country is assumed. Used for all address types.
     *
     * @var CountryCode
     */
    private CountryCode $countryId;
    
    /**
     * Required, if country supports states
     *
     * @var string
     */
    private string $stateId;
    
    /**
     * Required, if country has full site nomenclature and pair (siteType, siteName) is not provided.
     *
     * @var int
     */
    private int $siteId;
    
    /**
     * Forbidden, if siteId is provided. Otherwise, is not mandatory
     *
     * @var string
     */
    private string $siteType;
    
    /**
     * Forbidden, if siteId is provided. Otherwise, is not mandatory
     *
     * @var string
     */
    private string $siteName;

    /**
     * Required if country requires postcode for addresses
     *
     * @var string
     */
    private string $postCode;

    /**
     * @param int $siteId
     * @param string $postCode
     */
    public function __construct(int $siteId, string $postCode)
    {
        $this->setSiteId($siteId);
        $this->setPostCode($postCode);
    }
    
    /**
     * @return CountryCode countryId
     */
     public function getCountryId(): CountryCode
    {
        return $this->countryId;
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
     * @return void
     */
    private function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;

    }
    
    /**
     * @return string siteType
     */
    public function getSiteType(): string 
    {
        return $this->siteType;
    }
    
    /**
     * @param string $siteType
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
     * @return void
     */
    private function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }
}
