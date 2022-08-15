<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Client;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetContractClientsResponse
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsResponse
{
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Client>")
     */
    private ArrayCollection $clients;

    /**
     * @param ArrayCollection $clients
     * @return $this
     */
    public function setClients(ArrayCollection $clients): GetContractClientsResponse
    {
        $this->clients = $clients;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getClients(): ArrayCollection
    {
        return $this->clients;
    }
}