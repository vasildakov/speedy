<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Client;

/**
 * Class Client
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Client
{
    public int $clientId;

    public string $clientName;

    public string $objectName;

    public string $contactName;

    public Address $address;

    public string $email;

    public bool $privatePerson;

    /* public function __construct(
        $clientId,
        $clientName,
        $objectName,
        $contactName,
        Address $address,
        $email,
        $privatePerson
    ) {
        $this->clientId    = $clientId;
        $this->clientName  = $clientName;
        $this->objectName  = $objectName;
        $this->contactName = $contactName;
        $this->address     = $address;
        $this->email = $email;
        $this->privatePerson = $privatePerson;
    } */


    public function setClientId(int $clientId)
    {
        $this->clientId = $clientId;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function getClientName()
    {
        return $this->clientName;
    }

    public function getObjectName()
    {
        return $this->objectName;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPrivatePerson()
    {
        return $this->privatePerson;
    }
}
