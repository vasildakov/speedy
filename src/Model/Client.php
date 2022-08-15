<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Client
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Client
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public int $clientId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public string $clientName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public string $objectName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public string $contactName;

    /**
     * @var Address
     * @Serializer\Type("VasilDakov\Speedy\Model\Address")
     */
    public Address $address;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public string $email;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    public bool $privatePerson;

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId(int $clientId): void
    {
        $this->clientId = $clientId;
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
}
