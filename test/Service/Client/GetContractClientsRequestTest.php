<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Client;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;

/**
 * Class GetContractClientsRequestTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new GetContractClientsRequest();
        $instance->setClientSystemId('SomeClientSystemId');

        $this->assertEquals('SomeClientSystemId', $instance->getClientSystemId());
        $this->assertIsArray($instance->toArray());
    }
}
