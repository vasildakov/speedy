<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;
use DateTime;
/**
 * Class OfficeWorkingSchedule
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OfficeWorkingSchedule
{
    /**
     * @var DateTime
     * @TODO! The format: (format: ""yyyy-MM-dd"").
     */
    private DateTime $date;

    /**
     * @var DateTime
     * @TODO! The format: string ("HH:mm")
     */
    private DateTime $workingTimeFrom;

    /**
     * @var DateTime
     * @TODO! The format: string ("HH:mm")
     */
    private DateTime $workingTimeTo;

    /**
     * @var DateTime
     * @TODO! The format: string ("HH:mm")
     */
    private DateTime $sameDayDepartureCutoff;

    /**
     * @var bool
     */
    private bool $standardSchedule;
}