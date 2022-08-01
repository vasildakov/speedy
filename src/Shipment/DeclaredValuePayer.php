<?php
declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class declaredValuePayer
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
enum DeclaredValuePayer
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