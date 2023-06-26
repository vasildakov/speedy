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

use Laminas\Hydrator\HydratorInterface;
use VasilDakov\Speedy\Model\Address;

/**
 * Class AddressHydrator
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class AddressHydrator implements HydratorInterface
{
    public function hydrate($data, $object)
    {
        if (! $object instanceof Address) {
            return $object;
        }

        // ... continue hydration ...
    }

    public function extract($object): array
    {
        if (! $object instanceof Address) {
            return [];
        }

        // ... continue extraction ...
    }
}
