<?php
declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class ShipmentPayment
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
enum CourierServicePayer
{
    case SENDER;
    case RECIPIENT;
    case THIRD_PARTY;

    public function toArray(): array
    {
        return [
        ];
    }
}
