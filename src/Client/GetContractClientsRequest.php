<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Client;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetContractClientsRequest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsRequest
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $clientSystemId = null;

    public function toArray(): array
    {
        $array = [];

        if (!is_null($this->clientSystemId)) {
            $array['clientSystemId'] = $this->clientSystemId;
        }

        return $array;
    }

    /**
     * @return string|null
     */
    public function getClientSystemId(): ?string
    {
        return $this->clientSystemId;
    }

    /**
     * @param string|null $clientSystemId
     */
    public function setClientSystemId(?string $clientSystemId): void
    {
        $this->clientSystemId = $clientSystemId;
    }
}