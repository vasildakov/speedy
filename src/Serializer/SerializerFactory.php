<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Serializer;

use JMS\Serializer;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use VasilDakov\Speedy\Exception\ServiceNotCreatedException;

/**
 * Class SerializerFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
final class SerializerFactory
{
    /**
     * @return SerializerInterface
     */
    public function __invoke(): SerializerInterface
    {
        try {
            return Serializer\SerializerBuilder::create()
                ->setPropertyNamingStrategy(
                    new Serializer\Naming\SerializedNameAnnotationStrategy(
                        new Serializer\Naming\IdenticalPropertyNamingStrategy()
                    )
                )
                ->setSerializationContextFactory(function () {
                    return SerializationContext::create()
                        ->setSerializeNull(true)
                        ;
                })
                ->build()
            ;
        } catch (\Throwable $e) {
            throw new ServiceNotCreatedException();
        }
    }
}
