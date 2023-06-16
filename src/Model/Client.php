<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Client
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress MissingConstructor
 */
class Client
{
    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    public ?int $clientId = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public ?string $clientName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public ?string $objectName = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public ?string $contactName = null;

    /**
     * @var Address|null
     * @Serializer\Type("VasilDakov\Speedy\Model\Address")
     */
    public ?Address $address = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public ?string $email = null;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     */
    public ?bool $privatePerson = null;

    /**
     * @return int|null
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * @param int|null $clientId
     */
    public function setClientId(?int $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string|null
     */
    public function getClientName():?string
    {
        return $this->clientName;
    }

    /**
     * @param string|null $clientName
     */
    public function setClientName(?string $clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @return string|null
     */
    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    /**
     * @param string|null $objectName
     */
    public function setObjectName(?string $objectName): void
    {
        $this->objectName = $objectName;
    }

    /**
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * @param string|null $contactName
     */
    public function setContactName(?string $contactName): void
    {
        $this->contactName = $contactName;
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @param Address|null $address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return bool|null
     */
    public function isPrivatePerson(): ?bool
    {
        return $this->privatePerson;
    }

    /**
     * @param bool|null $privatePerson
     */
    public function setPrivatePerson(?bool $privatePerson): void
    {
        $this->privatePerson = $privatePerson;
    }

    public function toArray(): array
    {
        return [

        ];
    }
}
