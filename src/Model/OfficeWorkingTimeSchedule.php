<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class OfficeWorkingTimeSchedule.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class OfficeWorkingTimeSchedule
{
    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private \DateTime $date;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $workingTimeFrom;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $workingTimeTo;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $sameDayDepartureCutoff;

    /**
     * @Serializer\Type("bool")
     */
    private bool $standardSchedule;

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getWorkingTimeFrom(): \DateTime
    {
        return $this->workingTimeFrom;
    }

    public function setWorkingTimeFrom(\DateTime $workingTimeFrom): void
    {
        $this->workingTimeFrom = $workingTimeFrom;
    }

    public function getWorkingTimeTo(): \DateTime
    {
        return $this->workingTimeTo;
    }

    public function setWorkingTimeTo(\DateTime $workingTimeTo): void
    {
        $this->workingTimeTo = $workingTimeTo;
    }

    public function getSameDayDepartureCutoff(): \DateTime
    {
        return $this->sameDayDepartureCutoff;
    }

    public function setSameDayDepartureCutoff(\DateTime $sameDayDepartureCutoff): void
    {
        $this->sameDayDepartureCutoff = $sameDayDepartureCutoff;
    }

    public function isStandardSchedule(): bool
    {
        return $this->standardSchedule;
    }

    public function setStandardSchedule(bool $standardSchedule): void
    {
        $this->standardSchedule = $standardSchedule;
    }

    public function toArray(): array
    {
        return [
        ];
    }
}
