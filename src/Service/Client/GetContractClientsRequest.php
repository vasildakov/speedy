<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Client;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Property;

/**
 * Class GetContractClientsRequest.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class GetContractClientsRequest
{
    /**
     * @Serializer\Type("string")
     */
    private ?string $clientSystemId = null;

    public function __construct(?string $clientSystemId)
    {
        $this->clientSystemId = $clientSystemId;
    }

    public function getClientSystemId(): ?string
    {
        return $this->clientSystemId;
    }

    public function setClientSystemId(?string $clientSystemId): void
    {
        $this->clientSystemId = $clientSystemId;
    }

    public function __serialize(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return [
            Property::CLIENT_SYSTEM_ID->value => $this->clientSystemId
        ];
    }
}
