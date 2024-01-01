<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentDiscountCardId.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ShipmentDiscountCardId
{
    use ToArray;

    private int $contractId;

    private int $cardId;

    public function __construct(
        int $contractId,
        int $cardId
    ) {
        $this->setContractId($contractId);
        $this->setCardId($cardId);
    }

    public function getContractId(): int
    {
        return $this->contractId;
    }

    public function setContractId(int $contractId): void
    {
        $this->contractId = $contractId;
    }

    public function getCardId(): int
    {
        return $this->cardId;
    }

    public function setCardId(int $cardId): void
    {
        $this->cardId = $cardId;
    }
}
