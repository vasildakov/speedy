<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;
use DateTime;
use VasilDakov\Speedy\Shipment\ShipmentParcelSize;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Office
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Office
{
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $nameEn;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $siteId;

    /**
     * @var Address
     * @Serializer\Type("VasilDakov\Speedy\Model\Address")
     */
    private Address $address;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $workingTimeFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $workingTimeTo;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $workingTimeHalfFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $workingTimeHalfTo;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $workingTimeDayOffFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $workingTimeDayOffTo;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $sameDayDepartureCutoff;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $sameDayDepartureCutoffHalf;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'t'? HH [.:] MM>")
     */
    private DateTime $sameDayDepartureCutoffDayOff;

    /**
     * @var Size
     * @Serializer\Type("VasilDakov\Speedy\Model\Size")
     */
    private Size $maxParcelDimensions;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $maxParcelWeight;

    /**
     * @var
     * @TODO! An enum type property.
     */
    private $type;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $nearbyOfficeId;

    /**
     * @var OfficeWorkingTimeSchedule
     * @Serializer\Type("VasilDakov\Speedy\Model\OfficeWorkingTimeSchedule")
     */
    private OfficeWorkingTimeSchedule $workingTimeSchedule;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $palletOffice;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $cardPaymentAllowed;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $cashPaymentAllowed;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d>")
     */
    private DateTime $validFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d>")
     */
    private DateTime $validTo;

    /**
     * @var
     * @TODO! An enum type property.
     */

    private $cargoTypesAllowed;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $pickUpAllowed;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $dropOffAllowed;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     */
    public function setNameEn(string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return int
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     */
    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
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
    public function getWorkingTimeHalfFrom(): DateTime
    {
        return $this->workingTimeHalfFrom;
    }

    /**
     * @param DateTime $workingTimeHalfFrom
     */
    public function setWorkingTimeHalfFrom(DateTime $workingTimeHalfFrom): void
    {
        $this->workingTimeHalfFrom = $workingTimeHalfFrom;
    }

    /**
     * @return DateTime
     */
    public function getWorkingTimeHalfTo(): DateTime
    {
        return $this->workingTimeHalfTo;
    }

    /**
     * @param DateTime $workingTimeHalfTo
     */
    public function setWorkingTimeHalfTo(DateTime $workingTimeHalfTo): void
    {
        $this->workingTimeHalfTo = $workingTimeHalfTo;
    }

    /**
     * @return DateTime
     */
    public function getWorkingTimeDayOffFrom(): DateTime
    {
        return $this->workingTimeDayOffFrom;
    }

    /**
     * @param DateTime $workingTimeDayOffFrom
     */
    public function setWorkingTimeDayOffFrom(DateTime $workingTimeDayOffFrom): void
    {
        $this->workingTimeDayOffFrom = $workingTimeDayOffFrom;
    }

    /**
     * @return DateTime
     */
    public function getWorkingTimeDayOffTo(): DateTime
    {
        return $this->workingTimeDayOffTo;
    }

    /**
     * @param DateTime $workingTimeDayOffTo
     */
    public function setWorkingTimeDayOffTo(DateTime $workingTimeDayOffTo): void
    {
        $this->workingTimeDayOffTo = $workingTimeDayOffTo;
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
     * @return DateTime
     */
    public function getSameDayDepartureCutoffHalf(): DateTime
    {
        return $this->sameDayDepartureCutoffHalf;
    }

    /**
     * @param DateTime $sameDayDepartureCutoffHalf
     */
    public function setSameDayDepartureCutoffHalf(DateTime $sameDayDepartureCutoffHalf): void
    {
        $this->sameDayDepartureCutoffHalf = $sameDayDepartureCutoffHalf;
    }

    /**
     * @return DateTime
     */
    public function getSameDayDepartureCutoffDayOff(): DateTime
    {
        return $this->sameDayDepartureCutoffDayOff;
    }

    /**
     * @param DateTime $sameDayDepartureCutoffDayOff
     */
    public function setSameDayDepartureCutoffDayOff(DateTime $sameDayDepartureCutoffDayOff): void
    {
        $this->sameDayDepartureCutoffDayOff = $sameDayDepartureCutoffDayOff;
    }

    /**
     * @return Size
     */
    public function getMaxParcelDimensions(): Size
    {
        return $this->maxParcelDimensions;
    }

    /**
     * @param ShipmentParcelSize $maxParcelDimensions
     */
    public function setMaxParcelDimensions(ShipmentParcelSize $maxParcelDimensions): void
    {
        $this->maxParcelDimensions = $maxParcelDimensions;
    }

    /**
     * @return float
     */
    public function getMaxParcelWeight(): float
    {
        return $this->maxParcelWeight;
    }

    /**
     * @param float $maxParcelWeight
     */
    public function setMaxParcelWeight(float $maxParcelWeight): void
    {
        $this->maxParcelWeight = $maxParcelWeight;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getNearbyOfficeId(): int
    {
        return $this->nearbyOfficeId;
    }

    /**
     * @param int $nearbyOfficeId
     */
    public function setNearbyOfficeId(int $nearbyOfficeId): void
    {
        $this->nearbyOfficeId = $nearbyOfficeId;
    }

    /**
     * @return OfficeWorkingTimeSchedule
     */
    public function getWorkingTimeSchedule(): OfficeWorkingTimeSchedule
    {
        return $this->workingTimeSchedule;
    }

    /**
     * @param OfficeWorkingTimeSchedule $workingTimeSchedule
     */
    public function setWorkingTimeSchedule(OfficeWorkingTimeSchedule $workingTimeSchedule): void
    {
        $this->workingTimeSchedule = $workingTimeSchedule;
    }

    /**
     * @return bool
     */
    public function isPalletOffice(): bool
    {
        return $this->palletOffice;
    }

    /**
     * @param bool $palletOffice
     */
    public function setPalletOffice(bool $palletOffice): void
    {
        $this->palletOffice = $palletOffice;
    }

    /**
     * @return bool
     */
    public function isCardPaymentAllowed(): bool
    {
        return $this->cardPaymentAllowed;
    }

    /**
     * @param bool $cardPaymentAllowed
     */
    public function setCardPaymentAllowed(bool $cardPaymentAllowed): void
    {
        $this->cardPaymentAllowed = $cardPaymentAllowed;
    }

    /**
     * @return bool
     */
    public function isCashPaymentAllowed(): bool
    {
        return $this->cashPaymentAllowed;
    }

    /**
     * @param bool $cashPaymentAllowed
     */
    public function setCashPaymentAllowed(bool $cashPaymentAllowed): void
    {
        $this->cashPaymentAllowed = $cashPaymentAllowed;
    }

    /**
     * @return DateTime
     */
    public function getValidFrom(): DateTime
    {
        return $this->validFrom;
    }

    /**
     * @param DateTime $validFrom
     */
    public function setValidFrom(DateTime $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @return DateTime
     */
    public function getValidTo(): DateTime
    {
        return $this->validTo;
    }

    /**
     * @param DateTime $validTo
     */
    public function setValidTo(DateTime $validTo): void
    {
        $this->validTo = $validTo;
    }

    /**
     * @return mixed
     */
    public function getCargoTypesAllowed()
    {
        return $this->cargoTypesAllowed;
    }

    /**
     * @param mixed $cargoTypesAllowed
     */
    public function setCargoTypesAllowed($cargoTypesAllowed): void
    {
        $this->cargoTypesAllowed = $cargoTypesAllowed;
    }

    /**
     * @return bool
     */
    public function isPickUpAllowed(): bool
    {
        return $this->pickUpAllowed;
    }

    /**
     * @param bool $pickUpAllowed
     */
    public function setPickUpAllowed(bool $pickUpAllowed): void
    {
        $this->pickUpAllowed = $pickUpAllowed;
    }

    /**
     * @return bool
     */
    public function isDropOffAllowed(): bool
    {
        return $this->dropOffAllowed;
    }

    /**
     * @param bool $dropOffAllowed
     */
    public function setDropOffAllowed(bool $dropOffAllowed): void
    {
        $this->dropOffAllowed = $dropOffAllowed;
    }

}