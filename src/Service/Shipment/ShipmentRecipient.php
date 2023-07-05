<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentRecipient
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentRecipient
{
    use ToArray;

    /**
     * @var ShipmentPhoneNumber
     */
    private ShipmentPhoneNumber $phone1;

    /**
     * @var ShipmentPhoneNumber
     */
    private ?ShipmentPhoneNumber $phone2 = null;

    /**
     * @var ShipmentPhoneNumber
     */
    private ?ShipmentPhoneNumber $phone3 = null;

    /**
     * @var string
     */
    private string $clientName;

    /**
     * @var ?string
     */
    private ?string $objectName = null;

    /**
     * @var ?string
     */
    private ?string $contactName = null;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var bool
     */
    private bool $privatePerson = true;

    /**
     * @var ShipmentAddress|null
     */
    private ?ShipmentAddress $address;

    /**
     * @var ?int
     */
    private ?int $pickupOfficeId = null;

    /**
     * @param ShipmentPhoneNumber $phone1
     * @param string $clientName
     * @param string $email
     * @param ShipmentAddress|null $address
     * @param int|null $pickupOfficeId
     */
    public function __construct(
        ShipmentPhoneNumber $phone1,
        string $clientName,
        string $email,
        ?ShipmentAddress $address = null,
        ?int $pickupOfficeId = null,
    ) {
        $this->phone1 = $phone1;
        $this->clientName = $clientName;
        $this->email = $email;
        $this->address = $address;
        $this->pickupOfficeId = $pickupOfficeId;
    }

    /**
     * @return ShipmentPhoneNumber
     */
    public function getPhone1(): ShipmentPhoneNumber
    {
        return $this->phone1;
    }

    /**
     * @param ShipmentPhoneNumber $phone1
     */
    public function setPhone1(ShipmentPhoneNumber $phone1): void
    {
        $this->phone1 = $phone1;
    }

    /**
     * @return ShipmentPhoneNumber
     */
    public function getPhone2(): ShipmentPhoneNumber
    {
        return $this->phone2;
    }

    /**
     * @param ShipmentPhoneNumber $phone2
     */
    public function setPhone2(ShipmentPhoneNumber $phone2): void
    {
        $this->phone2 = $phone2;
    }

    /**
     * @return ShipmentPhoneNumber
     */
    public function getPhone3(): ShipmentPhoneNumber
    {
        return $this->phone3;
    }

    /**
     * @param ShipmentPhoneNumber $phone3
     */
    public function setPhone3(ShipmentPhoneNumber $phone3): void
    {
        $this->phone3 = $phone3;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     */
    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @return string
     */
    public function getObjectName(): string
    {
        return $this->objectName;
    }

    /**
     * @param string $objectName
     */
    public function setObjectName(string $objectName): void
    {
        $this->objectName = $objectName;
    }

    /**
     * @return string
     */
    public function getContactName(): string
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     */
    public function setContactName(string $contactName): void
    {
        $this->contactName = $contactName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function getPrivatePerson(): bool
    {
        return $this->privatePerson;
    }

    /**
     * @param bool $privatePerson
     */
    public function setPrivatePerson(bool $privatePerson): void
    {
        $this->privatePerson = $privatePerson;
    }

    /**
     * @return ShipmentAddress|null
     */
    public function getAddress(): ?ShipmentAddress
    {
        return $this->address;
    }

    /**
     * @param ShipmentAddress|null $address
     */
    public function setAddress(?ShipmentAddress $address = null): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getPickupOfficeId(): int
    {
        return $this->pickupOfficeId;
    }

    /**
     * @param int $pickupOfficeId
     */
    public function setPickupOfficeId(int $pickupOfficeId): void
    {
        $this->pickupOfficeId = $pickupOfficeId;
    }
}
