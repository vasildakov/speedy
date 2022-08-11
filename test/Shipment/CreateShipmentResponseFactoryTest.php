<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\CreateShipmentResponse;
use VasilDakov\Speedy\Shipment\CreateShipmentResponseFactory;

/**
 * Class CreateShipmentResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentResponseFactoryTest extends TestCase
{

    public function testItCanCreateInstance()
    {
        $json = $this->getJson();

        $instance = (new CreateShipmentResponseFactory())($json);

        $this->assertInstanceOf(CreateShipmentResponse::class, $instance);
    }

    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/CreateShipmentResponse.json");

        return $json;
    }
}