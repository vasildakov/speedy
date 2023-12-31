<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Office.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 * @psalm-suppress PropertyNotSetInConstructor
 */
class Office
{
    use ToArray;

    public const TYPE_APT = 1;
    public const TYPE_OFFICE = 2;

    public const TYPES = [
        self::TYPE_APT => 'APT',
        self::TYPE_OFFICE => 'OFFICE',
    ];

    public const CARGO_TYPE_PARCEL = 1;
    public const CARGO_TYPE_PALLET = 2;
    public const CARGO_TYPE_TIRE = 3;

    public const CARGO_TYPES = [
        self::CARGO_TYPE_PARCEL => 'PARCEL',
        self::CARGO_TYPE_PALLET => 'PALLET',
        self::CARGO_TYPE_TIRE => 'TIRE',
    ];

    /**
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\Type("string")
     */
    private string $nameEn;

    /**
     * @Serializer\Type("int")
     */
    private int $siteId;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\Address")
     */
    private Address $address;

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
    private \DateTime $workingTimeHalfFrom;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $workingTimeHalfTo;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $workingTimeDayOffFrom;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $workingTimeDayOffTo;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $sameDayDepartureCutoff;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $sameDayDepartureCutoffHalf;

    /**
     * @Serializer\Type("DateTime<'H:s'>")
     */
    private \DateTime $sameDayDepartureCutoffDayOff;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\Size")
     */
    private Size $maxParcelDimensions;

    /**
     * @Serializer\Type("float")
     */
    private float $maxParcelWeight;

    /**
     * @Serializer\Type("string")
     */
    private string $type;

    /**
     * @Serializer\Type("int")
     */
    private int $nearbyOfficeId;

    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\OfficeWorkingTimeSchedule>")
     */
    private ArrayCollection $workingTimeSchedule;

    /**
     * @Serializer\Type("bool")
     */
    private bool $palletOffice;

    /**
     * @Serializer\Type("bool")
     */
    private bool $cardPaymentAllowed;

    /**
     * @Serializer\Type("bool")
     */
    private bool $cashPaymentAllowed;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private \DateTime $validFrom;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private \DateTime $validTo;

    /**
     * @Serializer\Type("array")
     */
    private array $cargoTypesAllowed;

    /**
     * @Serializer\Type("bool")
     */
    private bool $pickUpAllowed;

    /**
     * @Serializer\Type("bool")
     */
    private bool $dropOffAllowed;

    public function __construct()
    {
        $this->workingTimeSchedule = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    public function setNameEn(string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    public function getSiteId(): int
    {
        return $this->siteId;
    }

    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
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

    public function getWorkingTimeHalfFrom(): \DateTime
    {
        return $this->workingTimeHalfFrom;
    }

    public function setWorkingTimeHalfFrom(\DateTime $workingTimeHalfFrom): void
    {
        $this->workingTimeHalfFrom = $workingTimeHalfFrom;
    }

    public function getWorkingTimeHalfTo(): \DateTime
    {
        return $this->workingTimeHalfTo;
    }

    public function setWorkingTimeHalfTo(\DateTime $workingTimeHalfTo): void
    {
        $this->workingTimeHalfTo = $workingTimeHalfTo;
    }

    public function getWorkingTimeDayOffFrom(): \DateTime
    {
        return $this->workingTimeDayOffFrom;
    }

    public function setWorkingTimeDayOffFrom(\DateTime $workingTimeDayOffFrom): void
    {
        $this->workingTimeDayOffFrom = $workingTimeDayOffFrom;
    }

    public function getWorkingTimeDayOffTo(): \DateTime
    {
        return $this->workingTimeDayOffTo;
    }

    public function setWorkingTimeDayOffTo(\DateTime $workingTimeDayOffTo): void
    {
        $this->workingTimeDayOffTo = $workingTimeDayOffTo;
    }

    public function getSameDayDepartureCutoff(): \DateTime
    {
        return $this->sameDayDepartureCutoff;
    }

    public function setSameDayDepartureCutoff(\DateTime $sameDayDepartureCutoff): void
    {
        $this->sameDayDepartureCutoff = $sameDayDepartureCutoff;
    }

    public function getSameDayDepartureCutoffHalf(): \DateTime
    {
        return $this->sameDayDepartureCutoffHalf;
    }

    public function setSameDayDepartureCutoffHalf(\DateTime $sameDayDepartureCutoffHalf): void
    {
        $this->sameDayDepartureCutoffHalf = $sameDayDepartureCutoffHalf;
    }

    public function getSameDayDepartureCutoffDayOff(): \DateTime
    {
        return $this->sameDayDepartureCutoffDayOff;
    }

    public function setSameDayDepartureCutoffDayOff(\DateTime $sameDayDepartureCutoffDayOff): void
    {
        $this->sameDayDepartureCutoffDayOff = $sameDayDepartureCutoffDayOff;
    }

    public function getMaxParcelDimensions(): Size
    {
        return $this->maxParcelDimensions;
    }

    public function setMaxParcelDimensions(Size $maxParcelDimensions): void
    {
        $this->maxParcelDimensions = $maxParcelDimensions;
    }

    public function getMaxParcelWeight(): float
    {
        return $this->maxParcelWeight;
    }

    public function setMaxParcelWeight(float $maxParcelWeight): void
    {
        $this->maxParcelWeight = $maxParcelWeight;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getNearbyOfficeId(): int
    {
        return $this->nearbyOfficeId;
    }

    public function setNearbyOfficeId(int $nearbyOfficeId): void
    {
        $this->nearbyOfficeId = $nearbyOfficeId;
    }

    public function getWorkingTimeSchedule(): ArrayCollection
    {
        return $this->workingTimeSchedule;
    }

    public function setWorkingTimeSchedule(ArrayCollection $workingTimeSchedule): void
    {
        $this->workingTimeSchedule = $workingTimeSchedule;
    }

    public function isPalletOffice(): bool
    {
        return $this->palletOffice;
    }

    public function setPalletOffice(bool $palletOffice): void
    {
        $this->palletOffice = $palletOffice;
    }

    public function isCardPaymentAllowed(): bool
    {
        return $this->cardPaymentAllowed;
    }

    public function setCardPaymentAllowed(bool $cardPaymentAllowed): void
    {
        $this->cardPaymentAllowed = $cardPaymentAllowed;
    }

    public function isCashPaymentAllowed(): bool
    {
        return $this->cashPaymentAllowed;
    }

    public function setCashPaymentAllowed(bool $cashPaymentAllowed): void
    {
        $this->cashPaymentAllowed = $cashPaymentAllowed;
    }

    public function getValidFrom(): \DateTime
    {
        return $this->validFrom;
    }

    public function setValidFrom(\DateTime $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function getValidTo(): \DateTime
    {
        return $this->validTo;
    }

    public function setValidTo(\DateTime $validTo): void
    {
        $this->validTo = $validTo;
    }

    public function getCargoTypesAllowed(): array
    {
        return $this->cargoTypesAllowed;
    }

    public function setCargoTypesAllowed(array $cargoTypesAllowed): void
    {
        $this->cargoTypesAllowed = $cargoTypesAllowed;
    }

    public function isPickUpAllowed(): bool
    {
        return $this->pickUpAllowed;
    }

    public function setPickUpAllowed(bool $pickUpAllowed): void
    {
        $this->pickUpAllowed = $pickUpAllowed;
    }

    public function isDropOffAllowed(): bool
    {
        return $this->dropOffAllowed;
    }

    public function setDropOffAllowed(bool $dropOffAllowed): void
    {
        $this->dropOffAllowed = $dropOffAllowed;
    }
}
