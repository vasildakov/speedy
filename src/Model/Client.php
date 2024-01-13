<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Client.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 */
class Client
{
    use ToArray;

    /**
     * @Serializer\Type("integer")
     */
    public ?int $clientId = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $clientName = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $objectName = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $contactName = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\Address")
     */
    public ?Address $address = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $email = null;

    /**
     * @Serializer\Type("bool")
     */
    public ?bool $privatePerson = null;

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(?int $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(?string $clientName): void
    {
        $this->clientName = $clientName;
    }

    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    public function setObjectName(?string $objectName): void
    {
        $this->objectName = $objectName;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(?string $contactName): void
    {
        $this->contactName = $contactName;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function isPrivatePerson(): ?bool
    {
        return $this->privatePerson;
    }

    public function setPrivatePerson(?bool $privatePerson): void
    {
        $this->privatePerson = $privatePerson;
    }
}
