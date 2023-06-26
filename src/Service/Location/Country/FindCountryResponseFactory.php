<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

use Doctrine\Common\Collections\ArrayCollection;
use VasilDakov\Speedy\Model\Country;
use VasilDakov\Speedy\Serializer\SerializerFactory;

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
    /**
     * @param string $json
     * @return FindCountryResponse
     */
    public function __invoke(string $json): FindCountryResponse
    {
        /** @var array $array */
        $array = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /**  @var FindCountryResponse $response */
        return $serializer->deserialize($json, FindCountryResponse::class, 'json');
    }
}
