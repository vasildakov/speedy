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

use RuntimeException;
use InvalidArgumentException;
use Laminas\Hydrator\ReflectionHydrator;
use VasilDakov\Speedy\Model\State;

/**
 * Class FindStateResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 */
class FindStateResponseFactory
{
    public function __invoke(string $json): FindStateResponse
    {
        $states = [];

        /** @var array $array */
        $array = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidArgumentException('Invalid or malformed JSON');
        }

        if (!isset($array['states']) || !is_array($array['states'])) {
            throw new RuntimeException('Service can not be created');
        }

        foreach ($array['states'] as $item) {
            $hydrator = new ReflectionHydrator();
            $states[] = $hydrator->hydrate($item, new State());
        }

        return new FindStateResponse($states);
    }
}
