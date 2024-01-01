<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentRecipient.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @psalm-suppress MissingConstructor
 */
class ShipmentRecipient
{
    use ToArray;

    private ShipmentPhoneNumber $phone1;

    private ?ShipmentPhoneNumber $phone2 = null;

    private ?ShipmentPhoneNumber $phone3 = null;

    private string $clientName;

    /**
     * @var ?string
     */
    private ?string $objectName = null;

    /**
     * @var ?string
     */
    private ?string $contactName = null;

    private string $email;

    private bool $privatePerson = true;

    private ?ShipmentAddress $address;

    /**
     * @var ?int
     */
    private ?int $pickupOfficeId = null;

    public function __construct(
        ShipmentPhoneNumber $phone1,
        string $clientName,
        string $email,
        ShipmentAddress $address = null,
        int $pickupOfficeId = null,
    ) {
        $this->phone1 = $phone1;
        $this->clientName = $clientName;
        $this->email = $email;
        $this->address = $address;
        $this->pickupOfficeId = $pickupOfficeId;
    }

    public function getPhone1(): ShipmentPhoneNumber
    {
        return $this->phone1;
    }

    public function setPhone1(ShipmentPhoneNumber $phone1): void
    {
        $this->phone1 = $phone1;
    }

    public function getPhone2(): ?ShipmentPhoneNumber
    {
        return $this->phone2;
    }

    public function setPhone2(ShipmentPhoneNumber $phone2): void
    {
        $this->phone2 = $phone2;
    }

    public function getPhone3(): ?ShipmentPhoneNumber
    {
        return $this->phone3;
    }

    public function setPhone3(ShipmentPhoneNumber $phone3): void
    {
        $this->phone3 = $phone3;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    public function setObjectName(string $objectName): void
    {
        $this->objectName = $objectName;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(string $contactName): void
    {
        $this->contactName = $contactName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPrivatePerson(): bool
    {
        return $this->privatePerson;
    }

    public function setPrivatePerson(bool $privatePerson): void
    {
        $this->privatePerson = $privatePerson;
    }

    public function getAddress(): ?ShipmentAddress
    {
        return $this->address;
    }

    public function setAddress(ShipmentAddress $address = null): void
    {
        $this->address = $address;
    }

    public function getPickupOfficeId(): ?int
    {
        return $this->pickupOfficeId;
    }

    public function setPickupOfficeId(int $pickupOfficeId): void
    {
        $this->pickupOfficeId = $pickupOfficeId;
    }
}
