<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Client;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Client\GetContractClientsResponse;

/**
 * Class GetContractClientsResponseTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsResponseTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getArray();

        $instance = new GetContractClientsResponse($array);

        $this->assertIsArray($instance->getClients());
    }


    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/Client.json");

        return $json;
    }
}