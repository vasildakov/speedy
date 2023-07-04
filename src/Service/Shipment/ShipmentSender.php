<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Speedy;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentSender
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 * @Serializer\AccessType("public_method")
 */
class ShipmentSender
{
    use ToArray;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $clientId = null;

    /**
     * @var ShipmentPhoneNumber
     */
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
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $clientName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $contactName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $email = null;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $privatePerson = true;

    /**
     * @var ?ShipmentAddress
     */
    private ?ShipmentAddress $address = null;

    /**
     * @var int
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
     * @return string|null
     */
    public function getClientName(): ?string
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
    public function isPrivatePerson(): bool
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
     * @return ShipmentAddress
     */
    public function getAddress(): ShipmentAddress
    {
        return $this->address;
    }

    /**
     * @param ShipmentAddress $address
     */
    public function setAddress(ShipmentAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getDropoffOfficeId(): int
    {
        return $this->dropoffOfficeId;
    }

    /**
     * @param int $dropoffOfficeId
     */
    public function setDropoffOfficeId(int $dropoffOfficeId): void
    {
        $this->dropoffOfficeId = $dropoffOfficeId;
    }

    /**
     * @param int|null $clientId
     */
    public function setClientId(?int $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return int|null
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function toArray(): array
    {
        return [
            Speedy::PHONE_1 => $this->phone1->toArray(),
            Speedy::CONTACT_NAME => $this->contactName,
            Speedy::EMAIL => $this->email,
        ];
    }

}
