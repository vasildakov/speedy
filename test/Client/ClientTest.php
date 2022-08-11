<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Client;

use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\Hydrator\ReflectionHydrator;
use Laminas\Hydrator\Strategy\HydratorStrategy;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Client\Address;
use VasilDakov\Speedy\Client\Client;

/**
 * Class ClientTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ClientTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $array = $this->getArray();

        $hydrator = new ClassMethodsHydrator();
         $hydrator->addStrategy(
             'address',
             new HydratorStrategy(new ReflectionHydrator(), Address::class)
         );

        $instance = $hydrator->hydrate($array, new Client());

        $this->assertInstanceOf(Client::class, $instance);
        $this->assertEquals($array['clientId'], $instance->getClientId());
        $this->assertEquals($array['clientName'], $instance->getClientName());
        $this->assertEquals($array['email'], $instance->getEmail());
        $this->assertEquals($array['objectName'], $instance->getObjectName());
        $this->assertEquals($array['contactName'], $instance->getContactName());
        $this->assertFalse($instance->isPrivatePerson());
        $this->assertInstanceOf(Address::class, $instance->getAddress());
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