<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CODPayment
 *
 * @Serializer\AccessType("public_method")
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version 1.0
 * @psalm-suppress MissingConstructor
 */
class CODPayment
{
    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    private DateTime $date;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $totalPayedOutAmount;

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getTotalPayedOutAmount(): float
    {
        return $this->totalPayedOutAmount;
    }

    /**
     * @param float $totalPayedOutAmount
     */
    public function setTotalPayedOutAmount(float $totalPayedOutAmount): void
    {
        $this->totalPayedOutAmount = $totalPayedOutAmount;
    }

    public function toArray(): array
    {
        return [

        ];
    }
}
