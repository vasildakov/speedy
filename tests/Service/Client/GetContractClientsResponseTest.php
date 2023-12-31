<?php

declare(strict_types=1);

namespace VasilDakov\tests\Service\Client;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;

/**
 * Class GetContractClientsResponseTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class GetContractClientsResponseTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new GetContractClientsResponse();

        $instance->setClients(new ArrayCollection());

        $this->assertInstanceOf(ArrayCollection::class, $instance->getClients());
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        return \file_get_contents('./test/Assets/Client.json');
    }
}
