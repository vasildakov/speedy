<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentSender
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentSender
{
    /**
     * @var ShipmentPhoneNumber
     */
    private ShipmentPhoneNumber $phone1;

    /**
     * @var ShipmentPhoneNumber
     */
    private ShipmentPhoneNumber $phone2;

    /**
     * @var ShipmentPhoneNumber
     */
    private ShipmentPhoneNumber $phone3;

    /**
     * @var string
     */
    private string $clientName;

    /**
     * @var string
     */
    private string $contactName;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var bool
     */
    private bool $privatePerson = false;

    /**
     * @var ShipmentAddress
     */

    private ShipmentAddress $address;

    /**
     * @var int
     */

    private int $dropoffOfficeId;

    /**
     * @param ShipmentPhoneNumber
     * @param string
     * @param string
     */
    public function __construct(ShipmentPhoneNumber $phone1, string $email, string $clientName)
    {
        $this->setPhone1($phone1);
        $this->setEmail($email);
        $this->setClientName($clientName);
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
     * @return array
     */
    public function toArray(): array
    {
        return [
           Speedy::PHONE_1             => $this->phone1->toArray(),
           //Speedy::PHONE_2             => $this->phone2->toArray(),
           //Speedy::PHONE_3             => $this->phone3->toArray(),
           Speedy::CLIENT_NAME         => $this->getClientName(),
           //Speedy::CONTACT_NAME      => $this->getContactName(),
           Speedy::EMAIL               => $this->getEmail(),
           //Speedy::PRIVATE_PERSON    => $this->getPrivatePerson(),
           //Speedy::ADDRESS           => $this->getAddress(),
           //Speedy::PICKUP_OFFICE_ID  => $this->getPickupOfficeId(),
        ];
    }
}
