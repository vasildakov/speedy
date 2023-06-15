<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

use Doctrine\Common\Collections\ArrayCollection;
use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\Hydrator\ReflectionHydrator;
use Laminas\Hydrator\Strategy\HydratorStrategy;
use VasilDakov\Speedy\Model\Client;
use VasilDakov\Speedy\Model\Country;

use function json_encode;
use function json_decode;
use function json_last_error;

/**
 * Class FindCountryResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryResponseFactory
{
    private array $countries = [];

    /**
     * @param string $json
     * @return FindCountryResponse
     */
    public function __invoke(string $json): FindCountryResponse
    {
        $array = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        foreach ($array['countries'] as $item) {
            $hydrator = new ReflectionHydrator();
            $this->countries[] = $hydrator->hydrate($item, new Country());
        }

        return new FindCountryResponse(
            new ArrayCollection($this->countries)
        );
    }
}
