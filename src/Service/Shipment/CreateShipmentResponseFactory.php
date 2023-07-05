<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer;
use VasilDakov\Speedy\Serializer\SerializerFactory;

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
        $serializer = (new SerializerFactory())();

        /** @var CreateShipmentResponse */
        return $serializer->deserialize($json, CreateShipmentResponse::class, 'json');
    }
}