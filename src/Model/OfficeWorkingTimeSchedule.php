<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class OfficeWorkingTimeSchedule
 *
 * @Serializer\AccessType("public_method")
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OfficeWorkingTimeSchedule
{
    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private DateTime $date;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $workingTimeFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $workingTimeTo;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $sameDayDepartureCutoff;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $standardSchedule;

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
     * @return DateTime
     */
    public function getWorkingTimeFrom(): DateTime
    {
        return $this->workingTimeFrom;
    }

    /**
     * @param DateTime $workingTimeFrom
     */
    public function setWorkingTimeFrom(DateTime $workingTimeFrom): void
    {
        $this->workingTimeFrom = $workingTimeFrom;
    }

    /**
     * @return DateTime
     */
    public function getWorkingTimeTo(): DateTime
    {
        return $this->workingTimeTo;
    }

    /**
     * @param DateTime $workingTimeTo
     */
    public function setWorkingTimeTo(DateTime $workingTimeTo): void
    {
        $this->workingTimeTo = $workingTimeTo;
    }

    /**
     * @return DateTime
     */
    public function getSameDayDepartureCutoff(): DateTime
    {
        return $this->sameDayDepartureCutoff;
    }

    /**
     * @param DateTime $sameDayDepartureCutoff
     */
    public function setSameDayDepartureCutoff(DateTime $sameDayDepartureCutoff): void
    {
        $this->sameDayDepartureCutoff = $sameDayDepartureCutoff;
    }

    /**
     * @return bool
     */
    public function isStandardSchedule(): bool
    {
        return $this->standardSchedule;
    }

    /**
     * @param bool $standardSchedule
     */
    public function setStandardSchedule(bool $standardSchedule): void
    {
        $this->standardSchedule = $standardSchedule;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [

        ];
    }
}
