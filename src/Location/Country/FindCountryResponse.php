<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Location\Country;

/**
 * Class FindCountryResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryResponse
{
    /**
     * @var array
     */
    private array $countries;

    /**
     * @param array $countries
     */
    public function __construct(array $countries = [])
    {
        $this->countries = $countries;
    }

    /**
     * @return array
     */
    public function getCountries(): array
    {
        return $this->countries;
    }
}
