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

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class CalculationResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class CalculationResponseFactory
{
    public function __invoke(string $json): CalculationResponse
    {
        /** @var array $array */
        json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /**  @var CalculationResponse $response */
        return $serializer->deserialize($json, CalculationResponse::class, 'json');
    }
}
