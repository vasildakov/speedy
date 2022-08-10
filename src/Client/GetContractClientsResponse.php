<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Client;

/**
 * Class GetContractClientsResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsResponse
{
    /**
     * @var Client[]
     */
    private array $clients;

    public function __construct(array $clients = [])
    {
        $this->clients = $clients;
    }

    public function getClients(): array
    {
        return $this->clients;
    }
}