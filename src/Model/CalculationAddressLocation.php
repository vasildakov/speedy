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


    public function setCountryId(CountryCode $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }
}
