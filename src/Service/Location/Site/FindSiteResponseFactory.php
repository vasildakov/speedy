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

namespace VasilDakov\Speedy\Service\Location\Site;

use InvalidArgumentException;
use Laminas\Hydrator\ReflectionHydrator;
use RuntimeException;
use VasilDakov\Speedy\Model\Site;
use VasilDakov\Speedy\Model\State;

/**
 * Class FindSiteResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindSiteResponseFactory
{
    public function __invoke(string $json): FindSiteResponse
    {
        /** @var array $array */
        $array = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidArgumentException('Invalid or malformed JSON');
        }

        if (!isset($array['sites']) || !is_array($array['sites'])) {
            throw new RuntimeException('Service can not be created');
        }

        $response = new FindSiteResponse();

        foreach ($array['sites'] as $item) {
            $site = (new ReflectionHydrator())->hydrate($item, new Site());
            $response->getSites()->add($site);
        }

        return $response;
    }
}
