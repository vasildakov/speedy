<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Serializer\SerializerFactory;

use function json_encode;

/**
 * Class CreateShipmentRequestFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentRequestFactory
{
    /**
     * @param array $array
     * @return CreateShipmentRequest
     */
    public function __invoke(array $array): CreateShipmentRequest
    {
        $serializer = (new SerializerFactory())();
        $json = json_encode($array);

        /** @var CreateShipmentRequest $request */
        $request = $serializer->deserialize($json, CreateShipmentRequest::class, 'json');

        return $request;
    }
}
