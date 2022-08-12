<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use Laminas\Hydrator\ReflectionHydrator;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Speedy;

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

        $json = \json_encode($array);

        return $serializer->deserialize($json, CreateShipmentRequest::class, 'json');

        /*
        $request = new CreateShipmentRequest(
            new ShipmentSender(
                new ShipmentPhoneNumber('0000000000'),
                'email@gmail.com',
                'Sender Name'
            ),
            new ShipmentRecipient(
                new ShipmentPhoneNumber($array['recipient']['phone1']['number']),
                $array['recipient']['clientName'],
                $array['recipient']['email']
            ),
            new ShipmentService(100),
            new ShipmentContent(1, 1.5, 'FURNITURE', 'BOX', null),
            new ShipmentPayment('RECIPIENT')
        );

        return $request; */

    }
}