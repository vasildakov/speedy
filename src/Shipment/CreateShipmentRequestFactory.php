<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use Laminas\Hydrator\ReflectionHydrator;
use VasilDakov\Speedy\Location\Country\Country;
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
    public function __invoke(array $array): CreateShipmentRequest
    {
        //var_dump($array); exit();
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
            new ShipmentPayment(new Payer('RECIPIENT'))
        );

        return $request;

        //$service =  $hydrator->hydrate($array, new ShipmentService($array['service']['serviceId']));

        /* $hydrator->addStrategy(
            'streetTypes',
            new HydratorStrategy(new ReflectionHydrator(), AddressNomenclatureType::class)
        );

        $hydrator->addStrategy(
            'complexTypes',
            new HydratorStrategy(new ReflectionHydrator(), AddressNomenclatureType::class)
        ); */

        //$object = $hydrator->hydrate($array, new CreateShipmentRequest());
    }
}