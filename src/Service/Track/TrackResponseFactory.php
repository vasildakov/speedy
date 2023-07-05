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

namespace VasilDakov\Speedy\Service\Track;

use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class TrackResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class TrackResponseFactory
{
    /**
     * @param string $json
     * @return TrackResponse
     */
    public function __invoke(string $json): TrackResponse
    {
        $serializer = (new SerializerFactory())();

        /** @var TrackResponse */
        return $serializer->deserialize($json, TrackResponse::class, 'json');
    }
}
