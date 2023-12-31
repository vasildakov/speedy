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

namespace VasilDakov\Speedy\Service\Location\Complex;

use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class FindComplexResponseFactory.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class FindComplexResponseFactory
{
    public function __invoke(string $json): FindComplexResponse
    {
        /* @var array $array */
        \json_decode($json, true);

        if (\JSON_ERROR_NONE !== \json_last_error()) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /*  @var FindComplexResponse $response */
        return $serializer->deserialize($json, FindComplexResponse::class, 'json');
    }
}
