<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Expr\Comparison;
use VasilDakov\Speedy\Model\Country;

use function array_filter;
use function strcasecmp;
use function mb_strtoupper;

/**
 * Class FindCountryResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryResponse
{
    private ArrayCollection $countries;

    public function __construct(ArrayCollection $countries)
    {
        $this->countries = $countries;
    }

    /**
     * @return ArrayCollection
     */
    public function getCountries(): ArrayCollection
    {
        return $this->countries;
    }


    public function findCountryById(int $id): ?Country
    {
        $collection = $this->getCountries()->filter(function (Country $country) use ($id) {
            return $country->getId() === $id;
        });

        if ($collection->isEmpty()) {
            return null;
        }

        /** @var Country */
        return $collection->first();
    }



    public function findCountryArrayByName(string $name): ?Country
    {
        $countries = (array)$this->countries;
        $array = array_filter($countries, function (Country $country) use ($name) {
            return (0 === strcasecmp(mb_strtoupper($name, 'UTF-8'), $country->getName() ));
        });

        if (empty($array)) {
            return null;

        }
        /** @var Country */
        return $array[0];
    }


    /**
     * @param string $name
     * @return Country|null
     */
    public function findCountryByName(string $name): ?Country
    {
        $name = mb_strtoupper($name, 'UTF-8');

        $collection = $this->countries->filter(function (Country $country) use ($name) {
            return $country->getName() === $name;
        });

        if ($collection->isEmpty()) {
            return null;
        }

        /** @var Country */
        return $collection->first();
    }

    /**
     * @param string $isoAlpha2
     * @return Country|null
     */
    public function findCountryByIsoAlpha2(string $isoAlpha2): ?Country
    {
        $collection =  $this->getCountries()->filter(function (Country $country) use ($isoAlpha2) {
            return $country->getIsoAlpha2() === $isoAlpha2;
        });

        if ($collection->isEmpty()) {
            return null;
        }

        /** @var Country */
        return $collection->first();
    }
}
