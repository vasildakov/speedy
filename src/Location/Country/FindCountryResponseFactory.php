<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Location\Country;

use Laminas\Hydrator\ReflectionHydrator;
use Laminas\Hydrator\Strategy\HydratorStrategy;
use VasilDakov\Speedy\Client\Address;
use VasilDakov\Speedy\Client\Client;
use VasilDakov\Speedy\Client\GetContractClientsResponse;

/**
 * Class FindCountryResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryResponseFactory
{
    /**
     * @var Client[]
     */
    private array $countries = [];

    /**
     * @param string $json
     * @return FindCountryResponse
     */
    public function __invoke(string $json): FindCountryResponse
    {
        $array = \json_decode($json, true);

        if (\json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        foreach ($array['countries'] as $item) {
            $hydrator = new ReflectionHydrator();

            // strategy for streetTypes
            $hydrator->addStrategy(
                'streetTypes',
                new HydratorStrategy(new ReflectionHydrator(),AddressNomenclatureType::class)
            );

            // strategy for complexTypes
            $hydrator->addStrategy(
                'complexTypes',
                new HydratorStrategy(new ReflectionHydrator(),AddressNomenclatureType::class)
            );
            $this->countries[] = $hydrator->hydrate($item, new Country());
        }

        return new FindCountryResponse($this->countries);
    }
}