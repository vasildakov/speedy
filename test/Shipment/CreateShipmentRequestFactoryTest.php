<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Shipment\CreateShipmentRequestFactory;

use function file_get_contents;
use function json_decode;

/**
 * Class CreateShipmentRequestFactoryTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentRequestFactoryTest extends TestCase
{
    public function testItCanDoSomething(): void
    {
        $array = $this->getArray();

        $instance = (new CreateShipmentRequestFactory())($array);

        $this->assertInstanceOf(CreateShipmentRequest::class, $instance);
    }

    private function getArray(): array
    {
        $json = $this->getJson();
        return json_decode($json, true);
    }

    private function getJson(): string
    {
        return file_get_contents("./test/Assets/CreateShipmentRequest.json");
    }
}
