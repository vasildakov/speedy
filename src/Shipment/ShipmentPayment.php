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
class ShipmentPayment
{
    public const PAYER_SENDER      = 1;
    public const PAYER_RECIPIENT   = 2;
    public const PAYER_THIRD_PARTY = 3;

    public const PAYER_OPTIONS = [
        self::PAYER_SENDER      => 'SENDER',
        self::PAYER_RECIPIENT   => 'RECIPIENT',
        self::PAYER_THIRD_PARTY => 'THIRD_PARTY'
    ];

    public function setCourierServicePayer($courierServicePayer): void
    {
        if (!in_array(self::PAYER_OPTIONS, $courierServicePayer, true)) {
            throw new \InvalidArgumentException();
        }

        $this->courierServicePayer = $courierServicePayer;
    }
    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}
