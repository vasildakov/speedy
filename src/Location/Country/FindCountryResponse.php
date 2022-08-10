<?php declare(strict_types=1);

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

    /**
     * @param int $id
     * @return Country|null
     */
    public function findCountryById(int $id): ?Country
    {
        foreach ($this->getCountries() as $country) {
            if ($id === $country->getId()) {
                return $country;
            }
        }
        return null;
    }

    /**
     * @param string $name
     * @return Country|null
     */
    public function findCountryByName(string $name): ?Country
    {
        $array = \array_filter($this->countries, function ($country) use ($name) {
            return (0 === \strcasecmp(\mb_strtoupper($name, 'UTF-8'), $country->name));
        });

        return (!empty($array)) ? $array[0] : null;
    }
}
