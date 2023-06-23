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

namespace VasilDakov\Speedy\Service\Location\Office;

use VasilDakov\Speedy\Serializer\SerializerFactory;

use function json_decode;
use function json_last_error;

/**
 * Class FindOfficeResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindOfficeResponseFactory
{
    public function __invoke(string $json): FindOfficeResponse
    {
        /** @var array $array */
        json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();
        return $serializer->deserialize($json, FindOfficeResponse::class, 'json');
    }
}
