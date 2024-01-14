<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentSender.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 *
 * @Serializer\AccessType("public_method")
 */
class ShipmentSender
{
    use ToArray;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $clientId = null;

    private ShipmentPhoneNumber $phone1;

    /**
     * @var ?ShipmentPhoneNumber
     */
    private ?ShipmentPhoneNumber $phone2 = null;

    /**
     * @var ?ShipmentPhoneNumber
     */
    private ?ShipmentPhoneNumber $phone3 = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $clientName = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $contactName = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $email = null;

    /**
     * @Serializer\Type("bool")
     */
    private bool $privatePerson = true;

    /**
     * @var ?ShipmentAddress
     */
    private ?ShipmentAddress $address = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $dropoffOfficeId = null;

    public function __construct(
        ShipmentPhoneNumber $phone1,
        string $email,
        string $clientName,
        int $dropoffOfficeId = null,
    ) {
        $this->phone1 = $phone1;
        $this->email = $email;
        $this->clientName = $clientName;
        $this->dropoffOfficeId = $dropoffOfficeId;
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

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(string $contactName): void
    {
        $this->contactName = $contactName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function isPrivatePerson(): bool
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

    public function setAddress(ShipmentAddress $address): void
    {
        $this->address = $address;
    }

    public function getDropoffOfficeId(): ?int
    {
        return $this->dropoffOfficeId;
    }

    public function setDropoffOfficeId(int $dropoffOfficeId): void
    {
        $this->dropoffOfficeId = $dropoffOfficeId;
    }

    public function setClientId(?int $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function toArray(): array
    {
        return [
            Property::PHONE_1->value => $this->phone1->toArray(),
            Property::CONTACT_NAME->value => $this->contactName,
            Property::EMAIL->value => $this->email,
        ];
    }
}
