<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Serializer;

use JMS\Serializer;
use JMS\Serializer\SerializerInterface;

/**
 * Class SerializerFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class SerializerFactory
{
    public function __invoke(): SerializerInterface
    {
        return Serializer\SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new Serializer\Naming\SerializedNameAnnotationStrategy(
                    new Serializer\Naming\IdenticalPropertyNamingStrategy()
                )
            )
            ->build()
        ;
    }
}
