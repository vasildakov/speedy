<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Client;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetContractClientsResponse.
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
class GetContractClientsResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Client>")
     */
    private ArrayCollection $clients;

    /**
     * @return $this
     */
    public function setClients(ArrayCollection $clients): self
    {
        $this->clients = $clients;

        return $this;
    }

    public function getClients(): ArrayCollection
    {
        return $this->clients;
    }
}
