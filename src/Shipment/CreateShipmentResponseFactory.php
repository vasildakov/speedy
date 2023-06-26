<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use JMS\Serializer;

/**
 * Class CreateShipmentResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentResponseFactory
{
    /**
     * @param string $json
     * @return CreateShipmentResponse
     */
    public function __invoke(string $json): CreateShipmentResponse
    {
        $serializer = Serializer\SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new Serializer\Naming\SerializedNameAnnotationStrategy(
                    new Serializer\Naming\IdenticalPropertyNamingStrategy()
                )
            )
            ->build();

        return $serializer->deserialize($json, CreateShipmentResponse::class, 'json');
    }
}
