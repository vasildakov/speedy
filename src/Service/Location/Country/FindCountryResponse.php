<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Model\Country;

/**
 * Class FindCountryResponse.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @Serializer\AccessType("public_method")
 */
class FindCountryResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Country>")
     */
    private ArrayCollection $countries;

    public function __construct()
    {
        $this->countries = new ArrayCollection();
    }

    public function setCountries(ArrayCollection $countries): void
    {
        $this->countries = $countries;
    }

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

        /* @var Country */
        return $collection->first();
    }

    public function findCountryByName(string $name): false|null|Country
    {
        $name = \mb_strtoupper($name, 'UTF-8');

        $collection = $this->countries->filter(function (Country $country) use ($name) {
            return $country->getName() === $name;
        });

        return (! $collection->isEmpty()) ? $collection->first() : null;
    }


    public function findCountryByIsoAlpha2(string $isoAlpha2): false|null|Country
    {
        $collection = $this->getCountries()->filter(function (Country $country) use ($isoAlpha2) {
            return $country->getIsoAlpha2() === $isoAlpha2;
        });

        return (! $collection->isEmpty()) ? $collection->first() : null;
    }
}
