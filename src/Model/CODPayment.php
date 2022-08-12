<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;
use DateTime;
/**
 * Class CODPayment
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CODPayment
{

    /**
     * @var DateTime
     * @TODO. The format: (format yyyy-MM-dd'T'HH:mm:ssZ)
     */
    private DateTime $date;

    /**
     * @var float
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

}