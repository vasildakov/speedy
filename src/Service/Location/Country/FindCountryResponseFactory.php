<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class FindCountryResponseFactory.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindCountryResponseFactory
{
    public function __invoke(string $json): FindCountryResponse
    {
        /** @var array $array */
        $array = \json_decode($json, true);

        if (\JSON_ERROR_NONE !== \json_last_error()) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /*  @var FindCountryResponse $response */
        return $serializer->deserialize($json, FindCountryResponse::class, 'json');
    }
}
