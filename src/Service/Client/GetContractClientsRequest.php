<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Client;

use JMS\Serializer\Annotation as Serializer;

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
    private ?string $clientSystemId;

    public function __construct(string $clientSystemId = null)
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

    public function toArray(): array
    {
        $array = [];

        if (null !== $this->clientSystemId) {
            $array['clientSystemId'] = $this->clientSystemId;
        }

        return $array;
    }
}
