<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Service;

use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class DestinationServicesResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class DestinationServicesResponseFactory
{
    public function __invoke(string $json): DestinationServicesResponse
    {
        json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /** @var DestinationServicesResponse $response */
        $response = $serializer->deserialize($json, DestinationServicesResponse::class, 'json');

        return $response;
    }
}
