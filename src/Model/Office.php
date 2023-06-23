<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use VasilDakov\Speedy\Exception\InvalidArgumentException;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Office
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 */
class Office
{
    public const TYPE_APT    = 1;
    public const TYPE_OFFICE = 2;

    public const TYPES = [
        self::TYPE_APT    => 'APT',
        self::TYPE_OFFICE => 'OFFICE'
    ];

    public const CARGO_TYPE_PARCEL = 1;
    public const CARGO_TYPE_PALLET = 2;
    public const CARGO_TYPE_TIRE   = 3;

    public const CARGO_TYPES = [
        self::CARGO_TYPE_PARCEL => 'PARCEL',
        self::CARGO_TYPE_PALLET => 'PALLET',
        self::CARGO_TYPE_TIRE   => 'TIRE'
    ];

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
    private DateTime $workingTimeHalfFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $workingTimeHalfTo;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $workingTimeDayOffFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $workingTimeDayOffTo;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $sameDayDepartureCutoff;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private DateTime $sameDayDepartureCutoffHalf;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'H:s'>")
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
     * @var string
     * @Serializer\Type("string")
     */
    private string $type;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $nearbyOfficeId;

    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\OfficeWorkingTimeSchedule>")
     */
    private ArrayCollection $workingTimeSchedule;

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
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private DateTime $validFrom;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private DateTime $validTo;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private array $cargoTypesAllowed;

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


    public function __construct()
    {
        $this->workingTimeSchedule = new ArrayCollection();
    }

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
     * @param Size $maxParcelDimensions
     */
    public function setMaxParcelDimensions(Size $maxParcelDimensions): void
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        if (!\in_array($type, \array_values(self::TYPES))) {
            throw new InvalidArgumentException();
        }
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
     * @return ArrayCollection
     */
    public function getWorkingTimeSchedule(): ArrayCollection
    {
        return $this->workingTimeSchedule;
    }

    /**
     * @param ArrayCollection $workingTimeSchedule
     */
    public function setWorkingTimeSchedule(ArrayCollection $workingTimeSchedule): void
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
     * @return array
     */
    public function getCargoTypesAllowed(): array
    {
        return $this->cargoTypesAllowed;
    }

    /**
     * @param array $cargoTypesAllowed
     */
    public function setCargoTypesAllowed(array $cargoTypesAllowed): void
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

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'nameEn' => $this->getNameEn(),
            'address' => $this->getAddress()->toArray()
        ];
    }
}
