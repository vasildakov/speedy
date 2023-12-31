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

namespace VasilDakov\Speedy\Service\Location\State;

use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class FindStateResponseFactory.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 */
class FindStateResponseFactory
{
    public function __invoke(string $json): FindStateResponse
    {
        /** @var array $array */
        $array = \json_decode($json, true);

        if (\JSON_ERROR_NONE !== \json_last_error()) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /*  @var FindStateResponse $response */
        return $serializer->deserialize($json, FindStateResponse::class, 'json');
    }
}
