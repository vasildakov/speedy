<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\ToArray;

/**
 * Class ShipmentDiscountCardId
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentDiscountCardId
{
    use ToArray;

    /**
     * @var int
     */
    private int $contractId;

    /**
     * @var int
     */
    private int $cardId;

    /**
     * @param int $contractId
     * @param int $cardId
     */
    public function __construct(
        int $contractId,
        int $cardId
    ) {
        $this->setContractId($contractId);
        $this->setCardId($cardId);
    }

    /**
     * @return int
     */
    public function getContractId(): int
    {
        return $this->contractId;
    }

    /**
     * @param int $contractId
     */
    public function setContractId(int $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * @return int
     */
    public function getCardId(): int
    {
        return $this->cardId;
    }

    /**
     * @param int $cardId
     */
    public function setCardId(int $cardId): void
    {
        $this->cardId = $cardId;
    }
}
